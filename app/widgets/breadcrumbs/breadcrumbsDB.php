<?php


namespace app\widgets\breadcrumbs;


use vendor\core\libs\DB;

class breadcrumbsDB
{
    public static function getBDBreadcrumbs()
    {
        $sql = ("SELECT * FROM category");
        return DB :: getAssoc($sql);
    }
}