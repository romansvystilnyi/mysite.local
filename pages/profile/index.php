<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
    <title>Profile</title>
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
        <div class="row">
            <div class="block-header-170">
                <a href="http://mysite.local/">
                    <img src="../../images/main_logo.png" alt="logo" class="main-logo">
                </a>
            </div>
            <div class="block-header-1030">
                <h1 class="hello">My site</h1>
            </div>
            <div class="block-header-170">
                <ul>
                    <li>
                        <button><a href="http://mysite.local/pages/registration">Регистрация</a></button>
                    </li>
                    <li>
                        <button><a href="http://mysite.local/pages/login">Логин</a></button>
                    </li>
                    <li>
                        <button><a href="http://mysite.local/pages/profile">Профиль</a></button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Верхняя часть страницы -->
</header>

<div class="menu-wrap row">
    <!-- Меню -->
    <nav class="menu container">
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
            <li class="menu-item">
                <a href="http://mysite.local/pages/list_of_posts">Список постов</a>
            </li>
        </ul>
    </nav>
    <!-- Меню -->
</div>

<div class="site-main-wrap row">
    <main class="main-content container">
        <div class="row">
            <h1>Профиль</h1>
            <form>
                <div class="row">
                    <div class="input-field">
                        <input id="signup-name" type="text">
                        <label class="active" for="signup-name">Имя</label>
                    </div>
                    <div class="input-field">
                        <input id="signup-pass" type="text">
                        <label class="active" for="signup-pass">Пароль</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="signup-birthday" type="text">
                        <label class="active" for="signup-birthday">День рождения</label>
                    </div>
                    <div>
                        <p>
                            <label>
                                <input name="group1" type="radio" checked/>
                                <span>Мужчина</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="group1" type="radio"/>
                                <span>Женщина</span>
                            </label>
                        </p>
                        <p>
                    </div>
                    <div>
                        <button type="submit" id="signup-submit">Обновить</button>
                    </div>
                </div>
            </form>
        </div>
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
