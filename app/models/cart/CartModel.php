<?php


namespace app\models\cart;

use app\models\AppModel;
class CartModel extends AppModel
{

    public static function addToCart($param)
    {
        $id = !empty($param['id']) ? (int)$param['id'] : null;
        $qty = !empty($param['qty']) ? (int)$param['qty'] : null;
        $color = !empty($param['color']) ? (int)$param['color'] : null;
        $complect = !empty($param['complect']) ? (int)$param['complect'] : null;

        $id = "{$id}-{$complect}-{$color}";

        if(isset($_SESSION['cart'][$id]))
            $_SESSION['cart'][$id] += $qty;
        else{
            $_SESSION['cart'][$id] = $qty;
        }


    }
}

//if(isset($_SESSION['cart'][$id]))
//    $_SESSION['cart'][$id]['qty'] += $qty;
//else{
//    $_SESSION['cart'][$id] = [
//        'qty' => $qty,
//    ];
//}