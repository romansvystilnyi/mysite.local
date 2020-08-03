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
            try {
                $user = User::signUp($_POST);
            } catch (\Exception $e) {
                $_SESSION['error'] = $e->getMessage();
                return;
            }
            if ($user instanceof User) {
                $_SESSION['success'] = 'Вы успешно зарегистрированы.';
                redirect('/');
                return;
            }
        }
    }

    public function loginAction()
    {
        if (!empty($_POST)) {
            $user = new User();
            if ($user->login($_POST)) {
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
            $login = $_SESSION['user']['login'];
            $email = $_SESSION['user']['email'];
            $name = $_SESSION['user']['name'];
            $id = $_SESSION['user']['id'];

            $pathImage = 'public/images/avatars/'. $id;

            if (file_exists($pathImage . '.png')) {
                $show_img = 'http://mysite.local/public/images/avatars/' . $id . '.png';
            } else {
                $show_img = 'http://mysite.local/public/images/default.png';
            }

        }

        if (!empty($_POST)) {
            $user = User::findOneByColumn('user','id', $_SESSION['user']['id']);
            try {
                $user->updateData($_POST);
            } catch (\Exception $e) {
                $_SESSION['error'] = $e->getMessage();
                return;
            }
            if ($user instanceof User) {
                $_SESSION['success'] = 'Успешно обновлено.';
                redirect();
                return;
            }
        }

        $this->setMeta('Profile');
        $meta = $this->meta;
        $this->set(compact('meta', 'login', 'email', 'name', 'show_img'));
    }

    public function uploadAction()
    {
        if (isset($_POST['submit'])) {
            $file = $_FILES['file'];

            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];

            $fileExp = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExp));

            $allowed = array('png');

            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 10000) {
                        $fileNameNew = $_SESSION['user']['id'] . "." . $fileActualExt;
                        $fileDestination = 'public/images/avatars/' . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $_SESSION['success'] = 'Изображение успешно добавлено.';
                        redirect('/user/profile');

                    } else {
                        $_SESSION['error'] = "Ваш файл слишком большой!(Не больше 10 Мб)";
                        redirect('/user/profile');
                    }
                } else {
                    $_SESSION['error'] = "При загрузке файла произошла ошибка!";
                    redirect('/user/profile');
                }
            } else {
                $_SESSION['error'] = "Вы не можете загружать файлы этого типа! (тольно 'png')";
                redirect('/user/profile');
            }
        }

        $this->set(compact('meta','show_img'));
    }
}