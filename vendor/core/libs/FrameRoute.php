<?php

namespace vendor\core\libs;

use vendor\core\libs\Router;
use vendor\core\libs\ErrorHandler;


class FrameRoute
{
      public static function start($query)
      {
         require_once LIBS . '/Functions.php';

         spl_autoload_register(function($class) {
            $file =  ROOT . '/' . str_replace('\\', '/', $class) . '.php';
            if(file_exists($file))
               require_once $file;
         });

         require_once CONFIG . '/routes.php';

         new ErrorHandler();
         Router :: dispatch($query);
      }
}

 ?>
