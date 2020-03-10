<?php

namespace app\controllers;

use app\models\main\MainModel;
use app\widgets\pagination\Pagination;

class MainController extends AppController
{

   public function indexAction()
   {

        $arrayProduct = MainModel::queryProduct();

        $pagination = new Pagination();
        $arrayProduct = $pagination->getPagination(9, $arrayProduct);

        $arrayProduct['pages'] = $this->loadView(VIEWS . '/General/cardProduct.php', $arrayProduct['pages']);

        $this->setData($arrayProduct);



   }

}