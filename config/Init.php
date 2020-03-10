<?php

define('DEBUG', 1);
define('ROOT', dirname(__DIR__));
define('APP', ROOT . '/app');
define('CONTROLLERS', APP . '/controllers');
define('MODELS', APP . '/models');
define('VIEWS', APP . '/views');
define('CORE', ROOT . '/vendor/core');
define('LIBS', ROOT . '/vendor/core/libs');
define('WWW', ROOT . '/public');
define('CACHE', ROOT . '/tmp/cache');
define('CONFIG', ROOT . '/config');
define('LAYOUT', 'default');
define('CSS', WWW . '/css');
define('WIDJETS', APP . '/widgets');

$query = rtrim($_SERVER['QUERY_STRING'], '/');

$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#", '', $app_path);
$app_path = str_replace('/public/', '', $app_path);
define('PATH', $app_path);

 ?>
