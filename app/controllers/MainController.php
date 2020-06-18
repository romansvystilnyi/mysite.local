<?php


namespace app\controllers;


use app\models\Main;


class MainController extends AppController
{

    public function indexAction()
    {
        $this->layout = 'main';
        $this->view = 'hello';
        $model = new Main;
        $posts = \R::findAll('posts');
        $title = 'Page title';
        $this->set(compact('title', 'posts'));
    }

}