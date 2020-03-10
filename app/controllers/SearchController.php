<?php


namespace app\controllers;


use app\models\search\SearchProduct;
use app\widgets\breadcrumbs\Breadcrumbs;
use app\widgets\pagination\Pagination;

class SearchController extends AppController
{
    public function viewAction()
    {
//        SearchProduct::setAllFile();

        $searchData = (!empty($_GET['query'])) ? SearchProduct::getSearchProduct($_GET['query']) : false;
        $id = $searchData[1]['category_id'];

        $pagination = new Pagination();

        $searchData = $pagination->getPagination(3, $searchData);

        $searchData['pages'] = $searchData ? $this->loadView( VIEWS . '/General/cardProduct.php', $searchData['pages']) : $this->loadView( VIEWS . '/General/cardProduct.php');

        $searchData['breadcrumbs'] = Breadcrumbs :: getBreadcrumbs($id, "Поисковый запрос по ({$_GET['query']})");

        $this->setData($searchData);
    }

    public function getTitleAction()
    {
        $a = SearchProduct::getFile( CACHE . '/searchData.json');
        echo $a;
        die();
    }
}