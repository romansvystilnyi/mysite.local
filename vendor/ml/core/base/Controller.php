<?php


namespace ml\core\base;


/**
 * Class Controller
 * @package vendor\core\base
 */
abstract class Controller
{
    /**
     * current route and parameters (controller, action, params)
     * @var array
     */
    public $route = [];

    /**
     * view
     * @var string
     */
    public $view;

    /**
     * current template
     * @var string
     */
    public $layout;

    /**
     * user data
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