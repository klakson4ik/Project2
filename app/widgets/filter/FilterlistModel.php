<?php


namespace app\widgets\filter;


class FilterlistModel
{
    public static function getFilterTitle(){
        $titlesDB =  FilterDB::getTitle();
        $titles = [];
        foreach($titlesDB as $key=>$value){
            $titles[] = $value['COLUMN_NAME'];
        }
        return $titles;
    }

    public static function getFilters($title){
        $title = implode(',' , $title);
        return FilterDB::getfilters($title);
    }
}