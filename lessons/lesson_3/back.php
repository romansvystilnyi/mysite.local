<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
    <title>Урок 3</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_header.css">
    <link rel="stylesheet" href="../../css/style_nav.css">
    <link rel="stylesheet" href="../../css/style_main.css">
    <link rel="stylesheet" href="../../css/style_footer.css">
</head>
<body>
<header class="site-header">
    <!-- Верхняя часть страницы -->
    <div class="container">
        <div class="block-header-170">
            <a href="http://mysite.local/">
                <img src="../../images/main_logo.png" alt="logo" class="main-logo">
            </a>
        </div>
        <div class="block-header-1030">
            <h1 class="hello">My site</h1>
        </div>
    </div>
    <!-- Верхняя часть страницы -->
</header>

<div class="menu-wrap row">
    <!-- Меню -->
    <menu class="menu container">
        <ul class="main-menu">
            <li class="menu-item">
                <a href="http://mysite.local/lessons/lesson_1">Урок 1</a>
            </li>
            <li class="menu-item">
                <a href="http://mysite.local/lessons/lesson_2">Урок 2</a>
            </li>
            <li class="menu-item">
                <a href="http://mysite.local/lessons/lesson_3">Урок 3</a>
            </li>
        </ul>
    </menu>
    <!-- Меню -->
</div>

<div class="site-main-wrap row">
    <main class="main-content container">
        <p>
            <b>
                <?php
                    require_once "../../include/string_rev.php";
                    echo string_rev($_POST['etext']);
                ?>
            </b>
        </p>
        <br>
        <a href="http://mysite.local/lessons/lesson_3"><button>Назад</button></a>
    </main>
</div>

<footer class="site-footer">
    <!-- Нижняя часть страницы -->
    <div class="container">
        <div class="row">
            <div class="block-footer-370">
                <img src="../../images/footer_logo.png" alt="logo" class="footer-logo">
                <p class="copyright">Copyright @2020</p>
            </div>
            <div class="block-footer-770">
                <p class="text-footer">My site</p>
            </div>
        </div>
    </div>
    <!-- Нижняя часть страницы -->
</footer>

</body>
</html>
