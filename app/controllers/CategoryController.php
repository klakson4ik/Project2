<?php


namespace app\controllers;

use app\models\category\CategoryTree;
use app\models\category\CategoryView;
use app\widgets\breadcrumbs\Breadcrumbs;
use app\widgets\pagination\Pagination;


class CategoryController extends AppController
{
    public function viewAction()
    {
        $categoryTree = new CategoryTree($this->route['alias']);
        $IDs = $categoryTree->getCatId();



        $pagination = new Pagination();

        $categoryView = new CategoryView($IDs);

        $categoryView = $categoryView->getCategoryView();
        $id = $categoryView[0]['category_id'];



        $categoryView = $pagination->getPagination(3, $categoryView);

        $categoryView['pages'] = $this->loadView(VIEWS . '/General/cardProduct.php', $categoryView['pages']);


        $categoryView['breadcrumbs'] = Breadcrumbs :: getBreadcrumbs($id, "Категория ({$this->route['alias']})");

        $this->setData($categoryView);



    }

}