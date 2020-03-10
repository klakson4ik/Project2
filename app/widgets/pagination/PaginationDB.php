<?php


namespace app\widgets\pagination;


use vendor\core\libs\DB;

class PaginationDB
{
    public static function getTotalDB($IDs){
        $sql = ("SELECT COUNT(1) FROM product WHERE category_id = ?");
        return DB::getArrayCategory($sql, $IDs);
    }
}