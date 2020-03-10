<?php


namespace app\widgets\basket;

use app\widgets\basket\interfaces\InterfaceCookie;

class BasketCookie implements InterfaceCookie
{
    private $id = null;
    private $qty = 1;
    private $complect = 1;
    private $color = 1;
    private $is_value = true;
    const BASKET = 'basket';
    
    public function __construct()
    {
        $this->color = !empty($_GET['color']) ? $_GET['color'] : '1';
        $this->complect = !empty($_GET['complect']) ? $_GET['complect'] : '1';
        $this->id = !empty($_GET['id']) ? $_GET['id'] : null;
        $this->qty = !empty($_GET['qty']) ? (int)$_GET['qty'] : 1;
    }

    public function getBasketCookie()
    {
        if (isset($_COOKIE[self::BASKET])) {
            $basketArr = [];
            $basketExplode = explode(',', $_COOKIE[self::BASKET]);
            foreach ($basketExplode as $item)
                $basketArr[] = explode('.', $item);

            return $basketArr;
        }

        return false;
    }

    public  function consistBasketCookie($basketArr)
    {
        if (isset($basketArr)) {
            foreach ($basketArr as $key => $item) {
                if ($item['0'] == $this->id && $item['1'] == $this->complect && $item['2'] == $this->color) {
                    $basketArr[$key]['3'] += $this->qty;
                    $this->is_value = false;
                    break;
                } else
                    $this->is_value = true;
            }
        }

        if ($this->is_value) {
            $basketArr[] = [
                'id' => $this->id,
                'complect' => $this->complect,
                'color' => $this->color,
                'qty' => $this->qty
            ];
        }

        return $basketArr;
    }

    public function consistQtyBasketCookie($basketArr, $qty)
    {
        for ($i = 0; $i < count($basketArr); ++$i)
        {
            $basketArr[$i]['3'] = $qty[$i];
        }
        return $basketArr;
    }

    public function setBasketCookie($basketArr)
    {
        foreach ($basketArr as $item)
            $basket[] = implode('.', $item);
        $basket = implode(',', $basket);

        setcookie(self::BASKET, $basket, time() + 3600 * 24, '/');
    }
}