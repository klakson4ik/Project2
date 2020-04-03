<?php


namespace app\widgets\filter;


class FilterlistModel
{
    public static function getFilterTitle(){
        $titlesDB =  FilterDB::getTitle();
        foreach($titlesDB as $key=>$value){
            $titles[] = $value['COLUMN_NAME'];
        }
        return $titles;
    }

    public static function getFilters($title){
        $title = implode(',' , $title);
        return FilterDB::getfilters($title);

    }

//    public static function addPriceToProduct($products, $price){
//        foreach($products as &$value){
//            debug($value['id']);
//            $value['price'] = $price['price'][$value['id']];
//        }
//    }

    public static function getFilterPositions($filterProduct, $filterTitles){
        $array = [];
        foreach ($filterTitles as $title){
            foreach ($filterProduct as $product){
                if (!isset($array[$title]))
                    $array[$title][] = $product[$title];
                if(!in_array($product[$title], $array[$title]))
                    $array[$title][] = $product[$title];
            }
        }
        foreach($array as &$value){
            sort($value);
        }

        return $array;
    }
}

