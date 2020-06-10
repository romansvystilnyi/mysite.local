<?php
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
switch ($url) {
    case 'http://mysite.local/':
        require_once 'hello.php';
        break;
    case 'http://mysite.local/lessons/lesson_1/':
        require_once '../../lessons/lesson_1/lesson_1.php';
        break;
    case 'http://mysite.local/lessons/lesson_2/':
        require_once '../../lessons/lesson_2/lesson_2.php';
        break;
    case 'http://mysite.local/lessons/lesson_3/':
        require_once '../../lessons/lesson_3/lesson_3.php';
        break;
    case 'http://mysite.local/lessons/lesson_3/back.php':
        require_once '../../lessons/lesson_3/back_result.php';
        break;
    case 'http://mysite.local/pages/list_of_posts/':
        require_once '../../pages/list_of_posts/list_of_post.php';
        break;
    case 'http://mysite.local/pages/login/':
        require_once '../../pages/login/login.php';
        break;
    case 'http://mysite.local/pages/profile/':
        require_once '../../pages/profile/profile.php';
        break;
    case 'http://mysite.local/pages/registration/':
        require_once '../../pages/registration/registration.php';
        break;
}