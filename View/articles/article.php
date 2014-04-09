<h2>Top Articles</h2>
<div class="art-wrapper">
    <?php //foreach ($articles as $article): ?>
    <div class="article">
        <h3 class="art-name"><?= $articles->getTitle(); ?></h3>
        <div class="art-content">
            <?= $articles->getText(); ?>
        </div>
        <div class="art-serv">

        </div>
    </div>
    <?php// endforeach; ?>

</div>