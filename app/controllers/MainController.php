<?php


namespace app\controllers;


use app\models\Main;


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
        $model = new Main;
//        $res = $model->query("CREATE TABLE `posts` (`id` int(11) PRIMARY KEY AUTO_INCREMENT, `title` text NOT NULL, `content` text NOT NULL, `status` int(11) NOT NULL, `date_created` datetime NOT NULL);");
        $posts = $model->findAll();
//        $posts2 = $model->findAll();
//        $post = $model->findOne('lorem ipsum','title');
//        $post = $model->findOne(2);
//        $data = $model->findBySql("SELECT * FROM posts ORDER BY id DESC LIMIT 2");
//        $data = $model->findBySql("SELECT * FROM {$model->table} WHERE title LIKE ?", ['%book%']);
//        $data = $model->findLike('book', 'title');
//        debug($data);
        $title = 'Page title';
        $this->set(compact('title', 'posts'));
    }

}