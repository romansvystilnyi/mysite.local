<article>
    <?php if (!empty($posts)) : ?>
        <h2><?= $posts->getTitle() ?> <p class="p-font-size-11"><?= $posts->getDateCreated() ?></p></h2>
        <p><?= $posts->getContent() ?></p>
    <?php endif; ?>
</article>