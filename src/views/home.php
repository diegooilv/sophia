<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Sophia</title>
</head>

<body>
    <?= renderHeader($navItems) ?>

    <main>
        <?php foreach ($posts as $post): ?>
            <?= renderPost($post) ?>
        <?php endforeach; ?>

        <?php foreach ($materials as $material): ?>
            <?= renderMaterial($material) ?>
        <?php endforeach; ?>
    </main>

    <?= renderFooter() ?>
</body>

</html>