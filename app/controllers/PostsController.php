<?php


namespace app\controllers;


use app\models\Posts;
use ml\core\App;


class PostsController extends AppController
{

    public function indexAction()
    {
        $this->layout = 'main';
        $this->view = 'index';
        $posts = Posts::findAll('posts');
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