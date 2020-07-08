<?php


namespace app\controllers;


use app\models\Main;
use ml\core\App;


class MainController extends AppController
{

    public function indexAction()
    {
        $this->layout = 'main';
        $this->view = 'hello';

        $this->setMeta('mysite.local');
        $meta = $this->meta;
        $this->set(compact('title', 'posts', 'meta'));
    }

}