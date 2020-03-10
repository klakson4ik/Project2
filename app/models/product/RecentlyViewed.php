<?php


namespace app\models\product;

use app\models\AppModel;

class RecentlyViewed extends AppModel
{
    public static function implodeRecentlyCookie($recentlyViewed, $id)
    {
        $recentlyViewed = explode(',', $recentlyViewed);
        if (!in_array($id, $recentlyViewed))
            $recentlyViewed[] = $id;

        return implode(',', $recentlyViewed);
    }

    public static function getRecentlyViewed($recently)
    {
        $recentlyViewed = explode(',', $recently);
        $recentlyViewed = ProductDB::getDBRecentlyViewed($recentlyViewed);
        return array_slice($recentlyViewed, -3);
    }
}