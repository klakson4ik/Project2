<?php

namespace app\controllers;

use app\models\main\MainModel;
use app\widgets\filter\Filter;
use app\widgets\pagination\Pagination;

class MainController extends AppController
{

   public function indexAction()
   {

        $arrayProduct = MainModel::queryProduct();

        $pagination = new Pagination();
        $arrayProduct = $pagination->getPagination(9, $arrayProduct);

        $arrayProduct['pages'] = $this->loadView(VIEWS . '/General/cardProduct.php', $arrayProduct['pages']);

        $filter = new Filter();
//        $arrayProduct['filter'] = ['filterTitle' => $filter->getFiltersTitle(), 'filters' => $filter->getFilters()];
//        debug($arrayProduct);
        echo $filter->getTplList();


        $this->setData($arrayProduct);



   }

}