<?php


namespace app\controllers;


use app\models\User;
use ml\core\base\View;

class UserController extends AppController
{
    public $layout = 'main';

    public function singupAction()
    {
        $this->setMeta('Sing Up');
        $meta = $this->meta;
        $this->set(compact('meta'));

        if (!empty($_POST)) {
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if (!$user->validate($data) || !$user->checkUnique()) {
                $user->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }
            $user->attribute['password'] = password_hash($user->attribute['password'], PASSWORD_DEFAULT);
            if ($user->save('user')) {
                $_SESSION['success'] = 'Вы успешно зарегистрированы.';
            } else {
                $_SESSION['error'] = 'Ошибка! Попробуйте позже.';
            }
            redirect();
        }
    }

    public function loginAction()
    {
        if (!empty($_POST)) {
            $user = new User();
            if ($user->login()) {
                $_SESSION['success'] = 'Вы успешно авторизованы.';
            } else {
                $_SESSION['error'] = 'Логин или пароль введены не верно';
            }
            redirect('/user/profile');
        }

        $this->setMeta('Login');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }

    public function logoutAction()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        redirect('/user/login');
    }

    public function profileAction()
    {
        if (empty($_SESSION)) {
            redirect('/user/login');
        } else {
            $model1 = new User();
            $id = $_SESSION['user']['id'];
            $user = \R::load('user', $id);
            $login = $user->login;
            $email = $user->email;
            $name = $user->name;
        }

        $this->view = 'profile';
        $this->setMeta('Profile', $name);
        $meta = $this->meta;
        $this->set(compact('meta', 'login', 'email', 'name'));

    }
}