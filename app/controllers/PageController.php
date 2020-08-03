<?php


namespace app\controllers;

use app\models\Posts;


class PageController extends AppController
{
    public $layout = 'main';

    public function viewAction()
    {
        $posts = Posts::getById($this->route['alias']);

        $this->setMeta('Post');
        $meta = $this->meta;
        $this->set(compact('posts', 'meta'));
    }

    public function editAction()
    {
        $posts = Posts::getById($this->route['alias']);
        $posts->setTitle('New article title');
        $posts->setContent('New article text');
        $posts->save();

        $this->setMeta('Page edit');
        $meta = $this->meta;
        $this->set(compact('posts', 'meta'));
    }

    public function addAction()
    {
        $posts = new Posts();
        $posts->setDateCreadted(date('Y-m-d G:i:s'));
        $posts->setTitle('New article title #2');
        $posts->setContent('New article text #2');
        $posts->save();
        var_dump($posts);
    }

    public function deleteAction()
    {
        $posts = new Posts();
        $posts->delete($this->route['alias']);
        redirect('/');
    }
}