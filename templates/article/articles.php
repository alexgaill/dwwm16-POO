
    <h1>Liste des articles présents sur mon blog</h1>

    <ul>
        <?php foreach($articles as $article): ?>
            <li><a href="?page=single&id=<?= $article->getId() ?>"><?= $article->getTitle() // <?= correspond à <?php echo ?></a></li>
        <?php endforeach; ?>
    </ul>
