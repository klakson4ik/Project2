<?php


namespace app\models\cart;


use app\models\AppModel;
use vendor\core\libs\DB;

class BoughtModel extends AppModel
{
    public static function setUser($login, $curr, $note = null){
        CartDB::setUserDB($login, $curr, $note);
    }

    public static function setProduct($orderID, $product){
        CartDB::setProductDB($orderID, $product);
    }

    public static function getOrderID(){
        return CartDB::getScopeIdentife();
    }
}