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
        $posts = \R::findAll('posts');
        $this->setMeta('Posts');
        $meta = $this->meta;
        $this->set(compact('posts', 'meta'));
    }

    public function testAction()
    {
        debug($this->route);
        echo 'Posts::test';
    }
}