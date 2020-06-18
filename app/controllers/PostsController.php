<?php


namespace app\controllers;


class PostsController extends AppController
{

    public function indexAction()
    {
        $this->layout = 'main';
        $this->view = 'index';
    }

    public function testAction()
    {
        debug($this->route);
        echo 'Posts::test';
    }
}