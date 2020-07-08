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

        $model = new Posts;
        $posts = App::$app->cache->get($model->table);
        if (!$posts) {
            $posts = \R::findAll($model->table);
            App::$app->cache->set('post', $posts);
        }
        App::$app->cache->delete('post');

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