<?php

namespace app\controllers;

use app\models\main\MainModel;
use app\widgets\filter\Filter;
use app\widgets\pagination\Pagination;

class MainController extends AppController
{

   public function indexAction()
   {
        $changeFilters = json_decode(file_get_contents("php://input"), true);
        debug($changeFilters);

        $arrayProduct = MainModel::queryProduct();

        $pagination = new Pagination();
        $arrayProduct = $pagination->getPagination(6, $arrayProduct);

        $arrayProduct['pages'] = $this->loadView(VIEWS . '/General/cardProduct.php', $arrayProduct['pages']);

        $filter = new Filter();

        $filters =  $filter->getTplList();
        $arrayProduct['filters'] = $filters;

        $this->setData($arrayProduct);



   }

}