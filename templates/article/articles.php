<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des articles présents sur mon blog</h1>

    <ul>
        <?php foreach($articles as $article): ?>
            <li><a href="?page=single&id=<?= $article->getId() ?>"><?= $article->getTitle() // <?= correspond à <?php echo ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>