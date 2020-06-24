<?php


namespace app\controllers;


class LessonsController extends AppController
{

    public function lessonOneAction()
    {
        $this->layout = 'main';
        $this->view = 'lessonone';
        $this->setMeta('Lesson One');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }

    public function lessonTwoAction()
    {
        $this->layout = 'main';
        $this->view = 'lessontwo';
        $this->setMeta('Lesson Two');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }

    public function lessonTreeAction()
    {
        $this->layout = 'main';
        $this->view = 'lessontree';
        $this->setMeta('Lesson Tree');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }

    public function backAction()
    {
        $this->layout = 'main';
        $this->view = 'back';
        $this->setMeta('result');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }

}