<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Sophia - IA</title>
</head>

<?= renderHeader($navItems) ?>
<main>
    <section class="sophia-ia">
        <div class="sophia-ia__header">
            <div class="sophia-ia__avatar"><img src='/assets/sophia.png' alt='Logo do Site'></div>
            <div class="sophia-ia__info">
                <h1 class="sophia-ia__title">Sophia</h1>
                <span class="sophia-ia__subtitle">Assistente Filosófica</span>
            </div>
        </div>

        <div class="sophia-ia__chat" id="sophia-ia-chat">
            <div class="sophia-ia__message sophia-ia__message--system">
                <p class="sophia-ia">Olá! Sou a Sophia, sua assistente filosófica. Faça-me uma pergunta sobre filosofia.
                </p>
            </div>

            <?php if (!empty($resposta)): ?>
                <div class="sophia-ia__message sophia-ia__message--user">
                    <p class="sophia-ia"><?= htmlspecialchars($pergunta) ?></p>
                </div>
                <div class="sophia-ia__message sophia-ia__message--sophia">
                    <div class="sophia-ia__avatar sophia-ia__avatar--small"><img src='/assets/sophia.png'
                            alt='Logo do Site'>
                    </div>
                    <div class="sophia-ia__response">
                        <?= $resposta ?>
                    </div>
                </div>
            <?php endif ?>
        </div>

        <?php if (!empty($resposta)): ?>
            <div class="sophia-ia__disclaimer">
                <svg class="sophia-ia__disclaimer-icon" viewBox="0 0 24 24" fill="none">
                    <path d="M12 8v4m0 4h.01M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10Z"
                        stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <div>
                    <strong>Resposta gerada por IA</strong>
                    <span>
                        Verifique informações, interpretações e referências filosóficas em fontes confiáveis.
                    </span>
                </div>
            </div>
        <?php endif; ?>

        <form class="sophia-ia__form" action="/ia" method="POST" id="sophia-ia-form">
            <input class="sophia-ia__input" type="text" name="prompt" id="prompt"
                placeholder="<?= !empty($resposta) ? 'Continue a conversa...' : 'Digite sua pergunta filosófica...' ?>"
                autocomplete="off" required>

            <button class="sophia-ia__button" type="submit">
                <svg viewBox="0 0 24 24" fill="none" class="sophia-ia__button-icon">
                    <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <input type="hidden" name="csrf" value="<?= CsrfService::token() ?>">
        </form>
    </section>
</main>

<?= renderFooter() ?>
<?= renderVLibras() ?>