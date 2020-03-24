<?php


namespace app\models\cart;


use app\models\AppModel;
use vendor\core\libs\DB;

class CartDB extends AppModel
{
    public static function setUserDB($login, $curr, $note){
        $sql = ("INSERT INTO order_user(user_name, status, currency, note) VALUES(?, ?, ?, ?)");
        DB::insertOrder($sql, $login, $curr, $note);
    }

    public static function setProductDB($orderID, $product)
    {
        $sql = ("INSERT INTO order_product(order_id, product_id, complect, color, price, qty) VALUES(?, ?, ?, ?, ?, ?)");
        DB::setOrderProduct($sql, $orderID, $product);

    }

    public static function getScopeIdentife(){
        return DB::scopeIdentife();
    }
}