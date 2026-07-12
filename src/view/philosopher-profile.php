<?php
function e($value)
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

function has($arr, $key)
{
    return !empty($arr[$key]);
}

$p = $philosopher ?? [];
$name = $p['name'] ?? 'Filósofo';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($name) ?> — Filósofos</title>
    <link rel='stylesheet' href='/assets/css/style.css'>
</head>

<body>
    <?= renderHeader($navItems) ?>

    <main class="philosophers-profile">

        <?php if (has($p, 'era')): ?>
            <nav class="philosophers-profile__breadcrumb" aria-label="breadcrumb">
                <a href="/philosophers" class="philosophers-profile__breadcrumb-link">Filósofos</a>
                <span class="philosophers-profile__breadcrumb-sep" aria-hidden="true">/</span>
                <a href="/philosophers" class="philosophers-profile__breadcrumb-link">
                    <?= e($p['era']) ?>
                </a>
                <span class="philosophers-profile__breadcrumb-sep" aria-hidden="true">/</span>
                <span class="philosophers-profile__breadcrumb-current"><?= e($name) ?></span>
            </nav>
        <?php endif; ?>

        <header class="philosophers-profile__hero">
            <?php if (has($p, 'image')): ?>
                <img class="philosophers-profile__portrait" src="<?= e($p['image']) ?>"
                    alt="<?= e($p['image_alt'] ?? $name) ?>">
            <?php endif; ?>

            <div class="philosophers-profile__heading">
                <?php if (has($p, 'era')): ?>
                    <span class="philosophers-profile__tag"><?= e($p['era']) ?></span>
                <?php endif; ?>

                <h1 class="philosophers-profile__name"><?= e($name) ?></h1>

                <?php if (has($p, 'birth_year') || has($p, 'death_year') || has($p, 'birth_place')): ?>
                    <p class="philosophers-profile__dates">
                        <?php if (has($p, 'birth_year')): ?>
                            <?= e($p['birth_year']) ?>
                        <?php endif; ?>
                        <?php if (has($p, 'death_year')): ?>
                            – <?= e($p['death_year']) ?>
                        <?php elseif (has($p, 'birth_year')): ?>
                            – presente
                        <?php endif; ?>
                        <?php if (has($p, 'birth_place')): ?>
                            <span class="philosophers-profile__place">· <?= e($p['birth_place']) ?></span>
                        <?php endif; ?>
                    </p>
                <?php endif; ?>

                <?php if (has($p, 'school')): ?>
                    <p class="philosophers-profile__school"><?= e($p['school']) ?></p>
                <?php endif; ?>
            </div>
        </header>

        <?php if (has($p, 'quote')): ?>
            <blockquote class="philosophers-profile__quote">
                <p class="philosophers-profile__quote-text">"<?= e($p['quote']) ?>"</p>
                <cite class="philosophers-profile__quote-author">— <?= e($name) ?></cite>
            </blockquote>
        <?php endif; ?>

        <?php if (has($p, 'bio')): ?>
            <section class="philosophers-profile__section">
                <h2 class="philosophers-profile__section-title">Biografia</h2>
                <p class="philosophers-profile__text"><?= nl2br(e($p['bio'])) ?></p>
            </section>
        <?php endif; ?>

        <?php if (has($p, 'main_ideas') && is_array($p['main_ideas'])): ?>
            <section class="philosophers-profile__section">
                <h2 class="philosophers-profile__section-title">Principais Ideias</h2>
                <ul class="philosophers-profile__ideas">
                    <?php foreach ($p['main_ideas'] as $idea): ?>
                        <li class="philosophers-profile__ideas-item"><?= e($idea) ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
        <?php endif; ?>

        <?php if (has($p, 'works') && is_array($p['works'])): ?>
            <section class="philosophers-profile__section">
                <h2 class="philosophers-profile__section-title">Obras</h2>
                <ul class="philosophers-profile__works">
                    <?php foreach ($p['works'] as $work): ?>
                        <li class="philosophers-profile__works-item">
                            <span class="philosophers-profile__works-title"><?= e($work['title'] ?? '') ?></span>
                            <?php if (!empty($work['year'])): ?>
                                <span class="philosophers-profile__works-year"><?= e($work['year']) ?></span>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        <?php endif; ?>

        <?php if (has($p, 'legacy')): ?>
            <section class="philosophers-profile__section">
                <h2 class="philosophers-profile__section-title">Legado</h2>
                <p class="philosophers-profile__text"><?= nl2br(e($p['legacy'])) ?></p>
            </section>
        <?php endif; ?>

        <?php if ((has($p, 'influences') && is_array($p['influences'])) || (has($p, 'influenced') && is_array($p['influenced']))): ?>
            <section class="philosophers-profile__section philosophers-profile__relations">
                <?php if (has($p, 'influences') && is_array($p['influences'])): ?>
                    <div class="philosophers-profile__relations-col">
                        <h2 class="philosophers-profile__section-title">Influenciado por</h2>
                        <ul class="philosophers-profile__tags">
                            <?php foreach ($p['influences'] as $influence): ?>
                                <li class="philosophers-profile__tags-item"><?= e($influence) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if (has($p, 'influenced') && is_array($p['influenced'])): ?>
                    <div class="philosophers-profile__relations-col">
                        <h2 class="philosophers-profile__section-title">Influenciou</h2>
                        <ul class="philosophers-profile__tags">
                            <?php foreach ($p['influenced'] as $influenced): ?>
                                <li class="philosophers-profile__tags-item"><?= e($influenced) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </section>
        <?php endif; ?>

        <nav class="philosophers-profile__back">
            <a href="/philosophers" class="philosophers-profile__back-link">← Voltar para Filósofos</a>
        </nav>

    </main>

    <?= renderFooter() ?>
</body>

</html>