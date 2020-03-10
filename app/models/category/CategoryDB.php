<?php


namespace app\models\category;


use app\models\AppModel;
use vendor\core\libs\DB;

class CategoryDB extends AppModel
{
    public static function getDBCategoryTree(){
        return DB::getAssoc("SELECT * FROM category");
    }

    public static function getDBCategoryView($IDs)
    {
        $sql = ("SELECT * FROM product WHERE category_id = ?");
        return DB::getArrayCategory($sql, $IDs);
    }
}