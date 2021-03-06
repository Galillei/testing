<h2>Top Articles</h2>
<div class="art-wrapper">
    <?php foreach ($articles as $article): ?>
    <div class="article">
        <h3 class="art-name"><?= $article->getTitle();?></h3>
        <div class="art-content">
            <?= $article->getShortDescription(); ?>
        </div>
        <div class="art-serv">
            <a href="articles/view/id/<?= $article->getId(); ?>" class="article-link">Read full article</a>
        </div>
    </div>
    <?php endforeach; ?>

</div>