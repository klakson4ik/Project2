<?php

namespace app\models\currency;

use vendor\core\libs\DB;

class CurrencyDB
{
    public static function getDBCurrency($currency)
    {
        $sql = ("SELECT `code` FROM `currencies` WHERE `code` = ?");
        return DB :: getOne($sql , [$currency]);
    }
}