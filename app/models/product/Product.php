<?php


namespace app\models\product;

use app\models\AppModel;

class Product extends AppModel
{
    public static function getProduct($alias)
    {
        return ProductDB::getBDProduct($alias);
    }

}