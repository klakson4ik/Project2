<?php


namespace app\models\product;

use app\models\AppModel;

class Mods extends AppModel
{
    public static function getComplect($id)
    {
        return ProductDB::getBDComplect($id);
    }

    public static function getColor($id)
    {
        return ProductDB::getBDColor($id);
    }
}