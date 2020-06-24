<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="http://mysite.local/public/images/favicon.png" type="image/png">
    <title><?= $meta['title'] ?></title>
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/css/style_header.css">
    <link rel="stylesheet" href="../../../public/css/style_nav.css">
    <link rel="stylesheet" href="../../../public/css/style_main.css">
    <link rel="stylesheet" href="../../../public/css/style_footer.css">
</head>
<body>

<?php
require_once "include/header.php";
require_once "include/navigation.php";
?>

<div class="site-main-wrap row">
    <main class="main-content container">
        <div class="row">
            <?php if (isset($_SESSION['error'])): ?>
                <div style="color: red">
                    <?= $_SESSION['error'];
                    unset($_SESSION['error']) ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['success'])): ?>
                <div style="color: green">
                    <?= $_SESSION['success'];
                    unset($_SESSION['success']) ?>
                </div>
            <?php endif; ?>

            <?= $content; ?>
        </div>
    </main>
</div>

<?php
require_once "include/footer.php";
?>
</body>
</html>
