<?php


namespace app\models\main;

use vendor\core\libs\DB;

class MainDB
{
    public static function getDBMain()
    {
        return DB :: getAssoc("SELECT id, title, price, img, alias, old_price FROM product WHERE status = '1'");
    }
}