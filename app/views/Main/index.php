<div class="container">
    <section id="posts">
        <?php if (!empty($posts)) : ?>
            <?php foreach ($posts as $post) : ?>
                <article>
                    <h2><?= $post['title'] ?> </h2> <h6><?= $post['date_created'] ?></h6>
                    <p><?= $post['content'] ?></p>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
</div>
