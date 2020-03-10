<?php

   namespace app\controllers;

   use app\models\currency\CurrencyModel;

   class CurrencyController extends AppController
   {

      public function changeAction()
      {
         $currency = CurrencyModel::getCurrency($_GET['curr']);
         if($currency)
               setcookie('currency', $currency, time() + 3600*24*7, '/');
         redirect();

      }
   }
