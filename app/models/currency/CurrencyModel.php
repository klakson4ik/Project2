<?php

namespace app\models\currency;

class CurrencyModel
{
    public static function getCurrency($value)
    {
        $currency = !empty($value) ? $value : null;
        if($currency)
        {
            $curr = CurrencyDB :: getDBCurrency($currency);
            return !empty($curr) ? $currency : false;
        }

    }

}