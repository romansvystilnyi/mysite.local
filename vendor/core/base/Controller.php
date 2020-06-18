<?php


namespace vendor\core\base;

/**
 * Class Controller
 * @package vendor\core\base
 */
abstract class Controller
{
    /**
     * текущий маршрут и параметры (controller, action, params)
     * @var array
     */
    public $route = [];

    /**
     * вид
     * @var string
     */
    public $view;

    /**
     * текущий шаблон
     * @var string
     */
    public $layout;

    /**
     * пользовательськие данные
     * @var array
     */
    public $vars;

    /**
     * Controller constructor.
     * @param $route
     */
    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView()
    {
        $viewObject = new View($this->route, $this->layout, $this->view);
        $viewObject->render($this->vars);
    }

    public function set($vars)
    {
        $this->vars = $vars;
    }
}