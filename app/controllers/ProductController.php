<?php


namespace app\controllers;

use app\models\product\Product;
use app\widgets\breadcrumbs\Breadcrumbs;
use app\models\product\Mods;
use app\models\product\Related;
use app\models\product\RecentlyViewed;

class ProductController extends AppController
{
    public function viewAction(){
        
        $product = Product::getProduct($this->route['alias']);
        $related = Related::getRelatedProduct($product['id']);
        $related = $this->loadView(VIEWS . '/General/cardProduct.php', $related);

        if(empty($_COOKIE['RecentlyViewed']))
            setcookie('RecentlyViewed', $product['id'], time() + 3600 * 24, '/');
        else {
            $recentlyViewed = RecentlyViewed::implodeRecentlyCookie($_COOKIE['RecentlyViewed'], $product['id']);
            setcookie('RecentlyViewed', $recentlyViewed, time() + 3600 * 24, '/');
        }

        $recentlyViewed = NULL;
        if(!empty($_COOKIE['RecentlyViewed']))
        {
            $recentlyViewed = RecentlyViewed::getRecentlyViewed($_COOKIE['RecentlyViewed']);
            $recentlyViewed = $this->loadView(VIEWS . '/General/cardProduct.php', $recentlyViewed);
        }

        $breadcrumbs = Breadcrumbs :: getBreadcrumbs($product['category_id'], $product['title']);


        $complect = Mods::getComplect($product['id']);
        $color = Mods::getColor($product['id']);


        $data = ['product' => $product, 'related' => $related, 'RecentlyViewed' => $recentlyViewed, 'breadcrumbs' => $breadcrumbs, 'complect' => $complect, 'color' => $color];

        $this->setData($data);
        $this->setMeta($product['title'], $product['description'], $product['keywords']);

        ;

    }

}