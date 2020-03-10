<?php


namespace app\models\main;

use app\models\AppModel;

class MainModel extends AppModel
{
    public static function queryProduct()
    {
         return MainDB::getDBMain();
    }
}