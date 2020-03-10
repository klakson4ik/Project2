<?php


namespace app\widgets\basket;


use vendor\core\libs\DB;

class BasketDB extends DB
{
    public static function getDB($array)
    {
        $sql = ("SELECT (ROUND(product.price*productComplect.coefficient*productColor.coefficient, 0 ))AS price, productComplect.complect, productColor.color, product.img, product.title, product.alias
        FROM product, productComplect, productColor 
        WHERE product.id = ?  AND productComplect.id = ?  AND productColor.id = ?");
        return DB::getBasketArray($sql, $array);
    }

}