<?php


namespace app\widgets\basket;


class BasketSession extends Basket
{
    public static function basketSetSession($const)
    {
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        $qty = !empty($_GET['qty']) ? (int)$_GET['qty'] : null;
        $color = !empty($_GET['color']) ? $_GET['color'] : null;
        $complect = !empty($_GET['complect']) ? $_GET['complect'] : null;
        $is_value = true;

        $id = "{$id}-{$complect}-{$color}";


        if(Isset($_SESSION[$const]))
        {
            foreach ($_SESSION[$const] as $key=>$item) {
                if ($item['id'] == $id) {
                    $_SESSION[$const][$key]['qty'] += $qty;
                    $is_value = false;
                    break;
                }else
                    $is_value = true;
            }
        }
        if($is_value) {
            $_SESSION[$const][] = [
                'id' => $id,
                'qty' => $qty
            ];
        }
        return ['id' => $id, 'qty' => $qty];
    }
}