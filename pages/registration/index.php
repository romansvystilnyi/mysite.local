<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
    <title>Registration</title>
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
            <form>
                <div class="row">
                    <div class="input-field">
                        <input placeholder="Ваше имя" name="name" id="signup-name" type="text">
                        <label for="signup-name">Имя</label>
                    </div>
                    <div class="input-field">
                        <input placeholder="Ваш пароль" name="pass" id="signup-pass" type="password">
                        <label for="signup-pass">Пароль</label>
                    </div>
                    <div class="input-field">
                        <input placeholder="Ваш адрес электронной почты" name="email" id="signup-email" type="email">
                        <label for="signup-email">Адрес электронной почты</label>
                    </div>
                    <div class="input-field">
                        <input placeholder="Ваш день рождения" name="birthday" id="signup-birthday" type="text"
                               class="datepicker">
                        <label for="signup-birthday">День рождения</label>
                    </div>
                    <div>
                        <p>
                            <label>
                                <input type="radio" value="male" name="sex" class="sex" checked>
                                <span>Мужчина</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="radio" value="female" name="sex" class="sex">
                                <span>Женщина</span>
                            </label>
                        </p>
                    </div>
                    <div>
                        <p>
                            <label>
                                <input type="checkbox" id="agree-rules">
                                <span>Я согласен</span>
                            </label>
                        </p>
                        <p class="read-rules">(правила)</p>
                    </div>
                    <div>
                        <button id="signup-submit">Зарегистрироваться</button>
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
