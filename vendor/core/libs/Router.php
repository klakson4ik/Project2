<?php

namespace vendor\core\libs;

use vendor\core\base\Controller;

   class Router
   {
      protected static $routes = [];
      public static $route = [];

      public static function add($regexp, $route = [])
      {
         self::$routes[$regexp] = $route;
      }

      public static function matchRoute($url)
      {
         foreach (self::$routes as $pattern => $value)
         {
            if(preg_match("#{$pattern}#i", $url, $matches))
            {
               $route = $value;
               foreach ($matches as $k => $v)
               {
                  if(is_string($k))
                     $route[$k] = $v;
               }
            if(empty($route['action']))
               $route['action'] = 'index';
            if(!isset($route['prefix']))
            {
               $route['prefix'] = '';
            }
            else
            {
               $route['prefix'] .= '\\';
            }
            $route['controller'] = self :: upperCamelCase($route['controller']);
            self :: $route = $route;
            return true;
            }
         }
         return false;
      }

      public static function dispatch($url)
      {
         if(self :: matchRoute($url))
            $controller =  'app\controllers\\' . self :: $route['controller'] . 'Controller';
         else
            throw new \Exception("Введенный адрес {$url} не совпадает с шаблоном", 404);
         if(class_exists($controller))
            $action = self :: firstLowerCamelCase(self :: $route['action']) . 'Action';
         else
            throw new \Exception("Контроллер {$controller} не найден", 404);
         if(method_exists($controller, $action))
         {
            $controllerObject = new $controller(self :: $route);
            $controllerObject->$action();
            $controllerObject->getView();
         }
         else
            throw new \Exception("Метод  {$controller :: $action} не найден", 404);

      }

      private static function upperCamelCase($value)
      {
         return str_replace(' ', '', ucwords(str_replace('-', ' ', $value)));
      }

      private static function firstLowerCamelCase($value)
      {
         return lcfirst(self :: upperCamelCase($value));
      }
   }

 ?>
