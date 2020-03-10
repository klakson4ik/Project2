<?php
   namespace app\widgets\currency;

   use vendor\core\libs\DB;

   class Currency
   {
      private $tpl;
      public $currency;
      private $currencies;


      public function __construct()
      {
         $this->tpl = WIDJETS . '/currency/currency_tpl/сurrency_tpl.php';
         $this->run();

      }

      private function run()
      {
         $this->currencies = self::getCurrencies();
         $this->currency = self::getCurrency($this->currencies);
      }

      public static function getCurrencies()
      {
         return  DB :: getAssoc("SELECT `code`, `title`, `Symbol_left`, `Symbol_right`, `value`, `base` FROM `currencies` ORDER BY `base` DESC", "UNIQUE");
      }

      public static function getCurrency($currencies)
      {
         if(isset($_COOKIE['currency']) && array_key_exists($_COOKIE['currency'], $currencies))
            $key = $_COOKIE['currency'];
         else
            $key = key($currencies);
         $currency = $currencies[$key];
         $currency['code'] = $key;
         return $currency;
      }

      public function getHtml()
      {
         ob_start();
         require_once $this->tpl;
         return ob_get_clean();
      }


   }
