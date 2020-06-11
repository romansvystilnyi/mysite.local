<?php
require_once 'array_posts.php';
?>
<section id="posts">
    <article>
        <h2>Пост 1</h2>
        <p>
            <?php
            print($posts['post_1']);
            ?>
        </p>
    </article>
    <article>
        <h2>Пост 2</h2>
        <p>
            <?php
            print($posts['post_2']);
            ?>
        </p>
    </article>
    <article>
        <h2>Пост 3</h2>
        <p>
            <?php
            print($posts['post_3']);
            ?>
        </p>
    </article>
    <article>
        <h2>Пост 4</h2>
        <?php
        print($posts['post_4']);
        ?>
    </article>
</section>
