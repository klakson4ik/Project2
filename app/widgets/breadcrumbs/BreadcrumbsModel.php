<?php


namespace app\widgets\breadcrumbs;


class BreadcrumbsModel
{
    public static function getBreadcrumbs($id){
        $cats = breadcrumbsDB::getBDBreadcrumbs();
        if(!$id) return false;
        $breadcrumbs = [];
        foreach($cats as $key=>$value){
            --$id;
            if(isset($cats[$id])) {
                $breadcrumbs[$cats[$id]['alias']] = $cats[$id]['title'];
                $id = $cats[$id]['parent_id'];
            }else break;
        }
        return array_reverse($breadcrumbs);
    }
}