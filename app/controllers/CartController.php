<?php


namespace app\controllers;

use app\widgets\basket\Basket;
use app\widgets\basket\BasketCookie;
use app\widgets\currency\Currency;

class CartController extends AppController
{

    public function addAction()
    {

        $basket = new Basket(new BasketCookie(), new Currency());
        $basket->basketAdd();
        $basket->calculateSum();
        $basket->getHtml(WIDJETS . '/basket/basket_tpl/basket_current_price.php');
        die();
    }

    public function showAction()
    {
        $curr = new Currency();
        $view = $this->loadView(WIDJETS . '/basket/basket_tpl/basket_tpl.php', $curr->currency);
        echo $view;
        die();
    }

    public function modalAction(){
        $qty = json_decode(file_get_contents("php://input"), true);
        $basket = new Basket(new BasketCookie(), new Currency());
        $basket->basketAddQty($qty);
        $basket->calculateSum();
        $basket->getHtml(WIDJETS . '/basket/basket_tpl/basket_current_price.php');
        die();
    }

    public function bayAction(){
        require WIDJETS . '/basket/basket_tpl/basket_tpl_bay.php';
        die();

    }
}