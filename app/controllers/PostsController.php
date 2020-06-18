<?php


namespace app\controllers;


use app\models\Posts;


class PostsController extends AppController
{

    public function indexAction()
    {
        $this->layout = 'main';
        $this->view = 'index';
        $model = new Posts;
        $posts = $model->findAll();
        $this->set(compact('posts'));
    }

    public function testAction()
    {
        debug($this->route);
        echo 'Posts::test';
    }
}