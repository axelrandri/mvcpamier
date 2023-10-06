
<h1>Liste des articles :</h1>

<div class="article-list">
    <?php foreach ($articles as $article): ?>
        <div class="article">
            <h2 class="article-title"><?= htmlspecialchars($article->title) ?></h2>
            <p class="article-content"><?= htmlspecialchars($article->content) ?></p>
            <p class="article-date">Date de création : <?= htmlspecialchars($article->creation_date) ?></p>
        </div>
    <?php endforeach; ?>
</div>

<p id="error"><?= $error ?></p>
