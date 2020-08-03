<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


use ml\core\Router;


$query = rtrim($_SERVER['QUERY_STRING'], '/');

define('WWW', __DIR__ . '/public');
define('CORE', __DIR__ . '/vendor/ml/core');
define('ROOT', __DIR__);
define('LIBS', __DIR__ . '/vendor/ml/libs');
define('APP', __DIR__ . '/app');
define('CACHE', __DIR__ . '/tmp/cache');
define('LAYOUT', 'default');

require 'vendor/ml/libs/functions.php';
require __DIR__ . '/vendor/autoload.php';

new \ml\core\App();

Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'Page']);
Router::add('^page/(?P<alias>(\d+))$', ['controller' => 'Page', 'action' => 'view']);
Router::add('^page/(?P<alias>(\d+))/edit$', ['controller' => 'Page', 'action' => 'edit']);
Router::add('^page/(?P<alias>(\d+))/delete$', ['controller' => 'Page', 'action' => 'delete']);

//defaults routs
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);
