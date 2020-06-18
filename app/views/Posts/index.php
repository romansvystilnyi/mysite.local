<div class="container">
    <section id="posts">
        <?php if (!empty($posts)) : ?>
            <?php foreach ($posts as $post) : ?>
                <article>
                    <h2><?= $post['title'] ?> <p class="p-font-size-11"><?= $post['date_created'] ?></p></h2>
                    <p><?= $post['content'] ?></p>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
</div>