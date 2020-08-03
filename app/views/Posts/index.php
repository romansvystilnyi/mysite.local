<div class="container">
    <section id="posts">
        <?php if (!empty($posts)) : ?>
            <?php foreach ($posts as $post) : ?>
                <article>
                    <h2><?= $post->getTitle() ?> <p class="p-font-size-11"><?= $post->getDateCreated() ?></p></h2>
                    <p><?= $post->getContent() ?></p>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
</div>