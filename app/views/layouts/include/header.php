<header class="site-header">
    <!-- Верхняя часть страницы -->
    <div class="container">
        <div class="row">
            <div class="block-header-170">
                <a href="http://mysite.local/">
                    <img src="http://mysite.local/public/images/main_logo.png" alt="logo" class="main-logo">
                </a>
            </div>
            <div class="block-header-1030">
                <h1 class="hello">My site</h1>
            </div>
            <div class="block-header-170">
                <ul>
                    <li>
                        <button><a href="http://mysite.local/user/singup">Sing Up</a></button>
                    </li>
                    <?php if (empty($_SESSION)): ?>
                        <li>
                            <button><a href="http://mysite.local/user/login">Login</a></button>
                        </li>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])): ?>
                        <li>
                            <button><a href="http://mysite.local/user/logout"><?= $meta['login'] ?> | Logout</a></button>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Верхняя часть страницы -->
</header>