<?php

namespace app\models\search;

use vendor\core\libs\DB;

class SerchDB
{
    public static function getSearchDBProduct($title)
    {
        $sql = ("SELECT * FROM product WHERE title LIKE ? ");
        return DB :: getAssocArray($sql, $title);

    }

    public static function getDBAllTitle()
    {
        $sql = ("SELECT title FROM product ");
        return DB :: getAssoc($sql);
    }
}