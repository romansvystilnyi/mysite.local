<?php


namespace app\controllers;


use app\models\User;
use ml\core\base\Controller;


class AppController extends Controller
{
    public $meta = [];

    protected function setMeta($title = '', $login = '')
    {
        if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            $model = new User();
            $id = $_SESSION['user']['id'];
            $user = \R::load('user', $id);
            $login = $user->login;
            $this->meta['login'] = $login;
        }
        $this->meta['title'] = $title;
    }
}