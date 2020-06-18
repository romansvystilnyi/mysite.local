<?php


namespace app\controllers;


class LessonsController extends AppController
{

    public function lessonOneAction()
    {
        $this->layout = 'main';
        $this->view = 'lessonone';
    }

    public function lessonTwoAction()
    {
        $this->layout = 'main';
        $this->view = 'lessontwo';
    }

    public function lessonTreeAction()
    {
        $this->layout = 'main';
        $this->view = 'lessontree';
    }

    public function backAction()
    {
        $this->layout = 'main';
        $this->view = 'back';
    }

}