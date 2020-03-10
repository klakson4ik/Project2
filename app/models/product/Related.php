<?php


namespace app\models\product;

use app\models\AppModel;

class Related extends AppModel
{
    public static function getRelatedProduct($id)
    {
        $relatedId = ProductDB:: getBDRelatedId($id);
        $relatedId = explode(",", $relatedId['related_id']);
        $related = [];
        foreach ($relatedId as $item)
        {
            $sql = ("SELECT * FROM product WHERE id = ? AND status = '1'");
            $item = ProductDB:: getBDRelatedItem($item);
            if (!empty($item))
                $related[] = $item;
        }

        return $related;
    }
}