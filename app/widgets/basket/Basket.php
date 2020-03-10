<?php

namespace app\widgets\basket;
use app\widgets\basket\interfaces\InterfaceCookie;
use app\widgets\currency\Currency;


class Basket
{
    private  $basket = [];
    private $cookier;
    private $viewPriceAndQty = null;
    private $currency;

    public function __construct(InterfaceCookie $cookier,Currency $currency)
    {
        $this->cookier = $cookier;
        $this->currency = $currency;
        $this->basket = $this->cookier->getBasketCookie();
        if(!empty($this->basket)) {
            $this->viewPriceAndQty = $this->calculateSum();
        }


    }

    public function basketAdd(){
        $basketArr = $this->cookier->consistBasketCookie($this->basket);
        $this->cookier->setBasketCookie($basketArr);

    }

    public function basketAddQty($qty)
    {
        $this->basketAddSessionQty($qty);
        $basketArr = $this->cookier->consistQtyBasketCookie($this->basket, $qty);
        $this->cookier->setBasketCookie($basketArr);
    }

    public function getHtml($tpl)
    {
        ob_start();
        require_once $tpl;
        echo ob_get_clean();

    }

    
    
    public function calculateSum()
    {
        $arrayDB = BasketDB::getDB($this->basket);
        foreach ($arrayDB as $key=>&$value){
            $value['qty'] = $this->basket[$key]['3'];
        }
        unset($value);
        $_SESSION['basket'] = $arrayDB;
        $fullPrice = null;
        $fullQty = null;
        foreach ($arrayDB as $value){
            $fullQty += $value['qty'];
            $fullPrice +=  $value['price'] * $value['qty'];
        }
        return ['price'=>$fullPrice, 'qty'=>$fullQty];
    }

    private function basketAddSessionQty($qty)
    {
        for ($i = 0; $i < count($_SESSION['basket']); ++$i)
        {
            $_SESSION['basket'][$i]['qty'] = $qty[$i];
        }

    }


}


