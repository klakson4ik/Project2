<?php

use vendor\core\libs\Router;

Router::add('^category/(?P<alias>[a-z0-9-\.]+)/?', ['controller' => 'category', 'action' => 'view']);

Router::add('^product/(?P<alias>[a-z0-9-\.]+)/?$', ['controller' => 'product', 'action' => 'view']);

Router::add('^admin$', ['controller' => 'Main', 'acton' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['perfix' => 'admin']);


Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?');


 ?>
