<?php


namespace ml\core;


use app\controllers\AppController;

class Router
{
    public function __construct()
    {
    }

    /**
     * route table
     * @var array
     */
    protected static $routes = [];

    /**
     * current route
     * @var array
     */
    protected static $route = [];

    /**
     * adds a route to the route table
     *
     * @param string $regexp route regex
     * @param array $route route ([controller, action, params])
     */
    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    /**
     * returns route table
     *
     * @return array
     */
    public static function getRoutes()
    {
        return self::$routes;
    }

    /**
     * returns current routes (controller, action, [params])
     *
     * @return array
     */
    public static function getRoute()
    {
        return self::$route;
    }

    /**
     * looks for URLs in the route table
     * @param string $url incoming URL
     * @return bool
     */
    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#i", $url, $matches)) {
                foreach ($matches as $k => $v) {
                    if (is_string($k)) {
                        $route[$k] = $v;
                    }
                }
                if (!isset($route['action'])) {
                    $route['action'] = 'index';
                }
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    /**
     * redirects the URL to the correct route
     * @param string $url incoming URL
     * @return void
     */
    public static function dispatch($url)
    {
        $url = self::removeQueryString($url);
        if (self::matchRoute($url)) {
            $controller = 'app\controllers\\' . self::$route['controller'] . 'Controller';
            if (!class_exists($controller)) {
                echo "Контроллер <b>$controller</b> не найден ";
                http_response_code(404);
                include 'public/404.html';
                return;
            }
            $controllerObject = new $controller(self::$route);
            $action = self::lowerCamelCase(self::$route['action']) . 'Action';
            if (!method_exists($controllerObject, $action)) {
                echo "Метод  <b>$controller::$action</b> не найден ";
                http_response_code(404);
                include 'public/404.html';
                return;
            }
            $controllerObject->$action();
            $controllerObject->getView();
        } else {
            http_response_code(404);
            include 'public/404.html';
        }
    }

    /**
     * converts names to camelCase
     * @param string $name string to convert
     * @return string
     */
    protected static function upperCamelCase($name)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
        debug($name);
    }

    /**
     * converts names to camelCase
     * @param string $name string to convert
     * @return string
     */
    protected static function lowerCamelCase($name)
    {
        return lcfirst(self::upperCamelCase($name));
    }

    /**
     * returns a string without GET parameters
     * @param string $url request URL
     * @return string
     */
    protected static function removeQueryString($url)
    {
        if ($url) {
            $params = explode('&', $url, 2);
            if (false === strpos($params[0], '=')) {
                return rtrim($params[0], '/');
            } else {
                return '';
            }
        }
    }
}