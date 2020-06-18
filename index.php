<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


use vendor\core\Router;


$query = rtrim($_SERVER['QUERY_STRING'], '/');

define('WWW', __DIR__ . '/public');
define('CORE', __DIR__ . '/vendor/core');
define('ROOT', __DIR__);
define('APP', __DIR__ . '/app');
define('LAYOUT', 'default');

require 'vendor/libs/functions.php';

spl_autoload_register(function ($class) {
    $file = ROOT . '/' . str_replace('\\', '/', $class . '.php');
    if (is_file($file)) {
        require_once $file;
    }
});

Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'Page']);
Router::add('^page/(?P<alias>[a-z-]+)$', ['controller' => 'Page', 'action' => 'view']);

//defaults routs
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);
