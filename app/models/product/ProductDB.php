<?php


namespace app\models\product;

use vendor\core\libs\DB;

class ProductDB
{

    public static function getBDComplect($id)
    {
        $sql = ("SELECT id, complect, coefficient FROM productComplect WHERE product_id = ? AND status = 1 ORDER BY `order` ");
        return DB :: getAssocArray($sql, $id);
    }

    public static function getBDColor($id)
    {
        $sql = ("SELECT id, color, coefficient FROM productColor WHERE product_id = ? AND status = 1 ORDER BY `order`");
        return DB :: getAssocArray($sql, $id);
    }

    public static function getBDProduct($alias)
    {
        $sql = ("SELECT * FROM product WHERE alias = ? AND status = '1'");
        return DB:: getOne($sql, [$alias]);
    }

    public static function getDBRecentlyViewed($param)
    {
        $sql = ("SELECT * FROM product WHERE id = ? AND status = '1'");
        return DB :: getArray($sql, $param);
    }

    public static function getBDRelatedId($id)
    {
        $sql = ("SELECT related_id FROM related_product WHERE product_id = ?");
        return DB:: getOne($sql, [$id]);
    }

    public static function getBDRelatedItem($item)
    {
        $sql = ("SELECT * FROM product WHERE id = ? AND status = '1'");
        return DB:: getOne($sql, [$item]);
    }
}