<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Tela Inicial</title>
</head>

<body>
    <?= renderHeader($navItems) ?>

    <?php foreach ($posts as $post): ?>
            <?= post($post) ?>
    <?php endforeach; ?>

    <?= footer() ?>

</body>

</html>