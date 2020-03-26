<?php


namespace app\widgets\filter;


use vendor\core\libs\DB;

class FilterDB
{
    public static function getTitle (){
        $sql = ("SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME='telephone_attribut' AND COLUMN_NAME NOT IN ('id', 'product_id') ");
        return DB::getTitleTable($sql);
    }

    public static function getfilters($title){
        $sql = ("SELECT $title FROM telephone_attribut");
        return DB::getAssoc($sql);
    }
}