<div class="menu-wrap row">
    <!-- Меню -->
    <nav class="menu container">
        <ul class="main-menu">
            <li class="menu-item">
                <a href="http://mysite.local/lessons/lesson-one">Урок 1</a>
            </li>
            <li class="menu-item">
                <a href="http://mysite.local/lessons/lesson-two">Урок 2</a>
            </li>
            <li class="menu-item">
                <a href="http://mysite.local/lessons/lesson-tree">Урок 3</a>
            </li>
            <li class="menu-item">
                <a href="http://mysite.local/posts">Список постов</a>
            </li>
            <?php if (!empty($_SESSION)): ?>
                <li>
                    <a href="http://mysite.local/user/profile">Профиль</a>
                </li>
            <?php endif; ?>

        </ul>
    </nav>
    <!-- Меню -->
</div>