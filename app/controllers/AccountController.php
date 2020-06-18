<?php


namespace app\controllers;


class AccountController extends AppController
{

    public function loginAction()
    {
        $this->layout = 'main';
        $this->view = 'login';
    }

    public function profileAction()
    {
        $this->layout = 'main';
        $this->view = 'profile';
    }

    public function registrationAction()
    {
        $this->layout = 'main';
        $this->view = 'registration';
    }

}