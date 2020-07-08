<?php


namespace app\controllers;


use app\models\User;
use ml\core\App;
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
                redirect('/user/profile');
            } else {
                $_SESSION['error'] = 'Логин или пароль введены не верно';
            }
            redirect();
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
        session_destroy();
        redirect('/');
    }

    public function profileAction()
    {
        if (empty($_SESSION)) {
            redirect('/user/login');
        } else {
            $model = new User();
            $id = $_SESSION['user']['id'];
            $user = \R::load('user', $id);
            $login = $user->login;
            $email = $user->email;
            $name = $user->name;

            $tbl = \R::load('images', 4);
            $show_img = $tbl['img'];

        }

        if (!empty($_POST)) {
            $user = new User();
            $data = $_POST;
            $user->load($data);

            $user->attribute['password'] = password_hash($user->attribute['password'], PASSWORD_DEFAULT);
            if ($user->update('user', $id)) {
                $_SESSION['success'] = 'Обновлено!';
            } else {
                $_SESSION['error'] = 'Ошибка! Попробуйте позже.';
            }
            redirect();
        }
        $this->view = 'profile';
        $this->setMeta('Profile', $name);
        $meta = $this->meta;
        $this->set(compact('meta', 'login', 'email', 'name', 'show_img'));
    }

    public function uploadAction()
    {
        if (isset($_POST['upload'])) {
            if (!empty($_FILES['img_upload']['tmp_name'])) {
                $model = new User();
                $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
                $img = file_get_contents($img);
                $img = base64_encode($img);
                $tbl = \R::dispense('images');
                $tbl->img = $img;
                \R::store($tbl);
                $_SESSION['success'] = 'Обновлено!';
            } else {
                $_SESSION['error'] = 'Ошибка! Попробуйте позже.';
            }
        }
        redirect('/user/profile');
    }
}