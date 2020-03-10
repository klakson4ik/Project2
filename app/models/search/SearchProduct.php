<?php


namespace app\models\search;


class SearchProduct
{
    public static function getSearchProduct($title)
    {
        $title = trim(strip_tags($title));
        $title = '%' . $title . '%';
        return SerchDB::getSearchDBProduct($title);
    }

    public static function setAllFile()
    {
        $b = [];
        $a =  SerchDB::getDBAllTitle();
        foreach ($a as $v){
            $b[] = $v['title'];
        }
        file_put_contents(CACHE . '/' . 'searchData' . '.json', json_encode($b));
    }

    public static function getFile($file)
    {
       return file_get_contents($file);
    }
}