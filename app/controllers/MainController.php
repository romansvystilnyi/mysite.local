<?php


namespace app\controllers;


class MainController extends AppController
{
//    public $layout = 'main';

    public function indexAction()
    {
        $this->layout = 'main';
        $this->view = 'hello';
//        $this->layout = false;
//        $this->layout = 'default';
//        $this->view = 'index';
//        $name = 'Johnny';
//        $hi = 'hello';
//        $colors = [
//            'white' => 'белый',
//            'black' => 'черный',
//        ];
//        $title = 'Page title';
//        $this->set(compact('name', 'hi', 'colors', 'title'));
    }

}