<?php


namespace app\models;


use ml\core\base\ActiveRecordEntity;
use ml\core\Db;


class User extends ActiveRecordEntity
{
    protected $login;
    protected $password;
    protected $email;
    protected $name;
    protected $role;

    public function setLogin($text)
    {
        return $this->login = $text;
    }

    public function setPassword($text)
    {
        return $this->password = $text;
    }

    public function setEmail($text)
    {
        return $this->email = $text;
    }

    public function setName($text)
    {
        return $this->name = $text;
    }

    public function setImage($text)
    {
        return $this->image = $text;
    }

    public static function signUp($userData)
    {
        if (empty($userData['login'])) {
            throw new \Exception('Не передан login');
        }

        if (!preg_match('/^[a-zA-Z0-9]+$/', $userData['login'])) {
            throw new \Exception('Login может состоять только из символов латинского алфавита и цифр');
        }

        if (empty($userData['email'])) {
            throw new \Exception('Не передан email');
        }

        if (!filter_var($userData['email'], FILTER_VALIDATE_EMAIL)) {
            throw new \Exception('Email некорректен');
        }

        if (empty($userData['password'])) {
            throw new \Exception('Не передан password');
        }

        if (mb_strlen($userData['password']) < 6) {
            throw new \Exception('Пароль должен быть не менее 6 символов');
        }
        if (static::findOneByColumn('login', $userData['login']) !== null) {
            throw new \Exception('Пользователь с таким login уже существует');
        }

        if (static::findOneByColumn('email', $userData['email']) !== null) {
            throw new \Exception('Пользователь с таким email уже существует');
        }

        $user = new User();
        $user->login = $user->setLogin($userData['login']);
        $user->email = $userData['email'];
        $user->name = $userData['name'];
        $user->password = password_hash($userData['password'], PASSWORD_DEFAULT);
        $user->role = 'user';
        $user->save('user');
        return $user;
    }

    public function getPasswordHash()
    {
        return $this->password;
    }

    public function login($loginData)
    {

        $login = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
        $password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;
        if ($login && $password) {
            $user = User::findOneByColumn('user', 'login', $loginData['login']);
            if ($user) {
                if (password_verify($password, $user->password)) {
                    foreach ($user as $k => $v) {
                        if ($k != 'password') {
                            $_SESSION['user'][$k] = $v;
                        }
                    }
                    return true;
                }
            }
        }
        return false;
    }

    public function updateData($userData)
    {
        if (empty($userData['login'])) {
            throw new \Exception('Не передан login');
        }
        if (!preg_match('/^[a-zA-Z0-9]+$/', $userData['login'])) {
            throw new \Exception('Login может состоять только из символов латинского алфавита и цифр');
        }

        if (empty($userData['password'])) {
            throw new \Exception('Не передан password');
        }

        if (!filter_var($userData['email'], FILTER_VALIDATE_EMAIL)) {
            throw new \Exception('Email некорректен');
        }

        $this->setLogin($userData['login']);
        $this->setEmail($userData['email']);
        $this->setName($userData['name']);
        $this->setPassword(password_hash($userData['password'], PASSWORD_DEFAULT));

        $this->save('user');
        $user = User::findOneByColumn('user', 'id', $_SESSION['user']['id']);
        if ($user) {
            if (password_verify($userData['password'], $user->password)) {
                foreach ($user as $k => $v) {
                    if ($k != 'password') {
                        $_SESSION['user'][$k] = $v;
                    }
                }
                return true;
            }
        }
        return $this;
    }

}