<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filosofos</title>
    <link rel='stylesheet' href='/assets/css/style.css'>
</head>

<body>
    <?= renderHeader($navItems) ?>
    <main class="philosophers-page">
        <h1 class="philosophers-page__title">Filósofos</h1>

        <div class="philosophers-accordion" data-philosophers-accordion>

            <div class="philosophers-category" data-philosophers-item>
                <button class="philosophers-category__header" data-philosophers-trigger aria-expanded="false">
                    <span class="philosophers-category__heading">
                        <svg class="philosophers-category__svg" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <circle cx="12" cy="12" r="1.6" fill="currentColor" />
                            <ellipse cx="12" cy="12" rx="9" ry="3.5" stroke="currentColor" stroke-width="1.4" />
                            <ellipse cx="12" cy="12" rx="9" ry="3.5" stroke="currentColor" stroke-width="1.4"
                                transform="rotate(60 12 12)" />
                            <ellipse cx="12" cy="12" rx="9" ry="3.5" stroke="currentColor" stroke-width="1.4"
                                transform="rotate(120 12 12)" />
                        </svg>
                        <h2 class="philosophers-category__title">Pré-Socráticos</h2>
                    </span>
                    <span class="philosophers-category__icon" aria-hidden="true"></span>
                </button>
                <div class="philosophers-category__panel" data-philosophers-panel>
                    <div class="philosophers-category__body">
                        <img class="philosophers-category__image"
                            src="/assets/images/philosophers/banner/PreSocratico.png" alt="">
                        <p class="philosophers-category__description">
                            Os filósofos pré-socráticos foram os primeiros pensadores da Grécia Antiga, anteriores a
                            Sócrates. Buscavam compreender a origem e o funcionamento do universo por meio da razão,
                            investigando questões como a natureza, a mudança, a matéria e o princípio de todas as
                            coisas. Suas ideias marcaram o início da filosofia ocidental e influenciaram o
                            desenvolvimento da ciência.
                        </p>
                        <ul class="philosophers-list">
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/thales-de-mileto">
                                    <img class="philosophers-list__image" src="/assets/images/philosophers/Thales.webp"
                                        alt="Thales de Mileto">
                                    <h3 class="philosophers-list__name">Thales de Mileto</h3>
                                    <p class="philosophers-list__description">
                                        Considerado o primeiro filósofo da história ocidental, defendia que a água
                                        era o princípio (arché) de todas as coisas.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/anaximandro">
                                    <img class="philosophers-list__image"
                                        src="/assets/images/philosophers/Anaximandro.webp" alt="Anaximandro">
                                    <h3 class="philosophers-list__name">Anaximandro</h3>
                                    <p class="philosophers-list__description">
                                        Discípulo de Tales, propôs o "apeíron" (o indefinido/ilimitado) como origem
                                        de tudo o que existe.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/pitagoras">
                                    <img class="philosophers-list__image"
                                        src="/assets/images/philosophers/Pitagoras.webp" alt="Pitágoras">
                                    <h3 class="philosophers-list__name">Pitágoras</h3>
                                    <p class="philosophers-list__description">
                                        Fundador de uma escola filosófica e religiosa, defendia que os números eram a
                                        essência de
                                        todas as coisas e é conhecido pelo famoso teorema que leva seu nome.
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="philosophers-category" data-philosophers-item>
                <button class="philosophers-category__header" data-philosophers-trigger aria-expanded="false">
                    <span class="philosophers-category__heading">
                        <svg class="philosophers-category__svg" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M4 20h16M5 20V9M9 20V9M15 20V9M19 20V9M3 9l9-5 9 5H3Z" stroke="currentColor"
                                stroke-width="1.4" stroke-linejoin="round" />
                        </svg>
                        <h2 class="philosophers-category__title">Clássicos</h2>
                    </span>
                    <span class="philosophers-category__icon" aria-hidden="true"></span>
                </button>
                <div class="philosophers-category__panel" data-philosophers-panel>
                    <div class="philosophers-category__body">
                        <img class="philosophers-category__image" src="/assets/images/philosophers/banner/Classicos.png"
                            alt="">
                        <p class="philosophers-category__description">
                            O período clássico é marcado pela filosofia de Sócrates, Platão e Aristóteles, que
                            deslocaram o foco da investigação da natureza para o ser humano, a ética, a política e o
                            conhecimento. Essa tríade lançou as bases do pensamento filosófico ocidental por
                            séculos.
                        </p>
                        <ul class="philosophers-list">
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/socrates">
                                    <img class="philosophers-list__image"
                                        src="/assets/images/philosophers/Socrates.webp" alt="Sócrates">
                                    <h3 class="philosophers-list__name">Sócrates</h3>
                                    <p class="philosophers-list__description">
                                        Não deixou obras escritas, mas revolucionou a filosofia com o método
                                        socrático, baseado no diálogo e na busca da verdade através de perguntas.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/platao">
                                    <img class="philosophers-list__image" src="/assets/images/philosophers/Platao.webp"
                                        alt="Platão">
                                    <h3 class="philosophers-list__name">Platão</h3>
                                    <p class="philosophers-list__description">
                                        Discípulo de Sócrates, criou a Teoria das Ideias e fundou a Academia, uma
                                        das primeiras instituições de ensino superior do Ocidente.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/aristoteles">
                                    <img class="philosophers-list__image"
                                        src="/assets/images/philosophers/Aristoteles.webp" alt="Aristóteles">
                                    <h3 class="philosophers-list__name">Aristóteles</h3>
                                    <p class="philosophers-list__description">
                                        Aluno de Platão, sistematizou a lógica e contribuiu para diversas áreas como
                                        ética, política, biologia e metafísica.
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="philosophers-category" data-philosophers-item>
                <button class="philosophers-category__header" data-philosophers-trigger aria-expanded="false">
                    <span class="philosophers-category__heading">
                        <svg class="philosophers-category__svg" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M12 3v18M8 6.5c0 2.5-1.5 4-4 4M12 6.5c0 2.5 1.5 4 4 4M12 6.5c0 2.5-1.5 4-4 4M20 10.5c-2.5 0-4-1.5-4-4"
                                stroke="currentColor" stroke-width="1.4" stroke-linecap="round" />
                            <path d="M3 10.5h6M15 10.5h6" stroke="currentColor" stroke-width="1.4"
                                stroke-linecap="round" />
                            <path d="M8 20h8" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" />
                        </svg>
                        <h2 class="philosophers-category__title">Medievais</h2>
                    </span>
                    <span class="philosophers-category__icon" aria-hidden="true"></span>
                </button>
                <div class="philosophers-category__panel" data-philosophers-panel>
                    <div class="philosophers-category__body">
                        <img class="philosophers-category__image" src="" alt="">
                        <p class="philosophers-category__description">
                            A filosofia medieval foi profundamente marcada pela tentativa de conciliar fé e razão,
                            tendo como pano de fundo o pensamento cristão, judaico e islâmico. Destacam-se os
                            debates sobre a existência de Deus, a alma e a relação entre teologia e filosofia.
                        </p>
                        <ul class="philosophers-list">
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/santo-agostinho">
                                    <img class="philosophers-list__image"
                                        src="/assets/images/philosophers/Agostinho.webp" alt="Santo Agostinho">
                                    <h3 class="philosophers-list__name">Santo Agostinho</h3>
                                    <p class="philosophers-list__description">
                                        Uniu a filosofia platônica ao cristianismo, discutindo temas como o
                                        livre-arbítrio, o tempo e a existência do mal.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/tomas-de-aquino">
                                    <img class="philosophers-list__image"
                                        src="/assets/images/philosophers/Tomas de Aquino.webp" alt="Tomás de Aquino">
                                    <h3 class="philosophers-list__name">Tomás de Aquino</h3>
                                    <p class="philosophers-list__description">
                                        Combinou a filosofia aristotélica com a teologia cristã, propondo cinco
                                        vias para provar a existência de Deus.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/guilherme-de-ockham">
                                    <img class="philosophers-list__image"
                                        src="/assets/images/philosophers/Guilherme.webp" alt="Guilherme de Ockham">
                                    <h3 class="philosophers-list__name">Guilherme de Ockham</h3>
                                    <p class="philosophers-list__description">
                                        Ficou conhecido pela "navalha de Ockham", princípio que defende a
                                        simplicidade nas explicações filosóficas e científicas.
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="philosophers-category" data-philosophers-item>
                <button class="philosophers-category__header" data-philosophers-trigger aria-expanded="false">
                    <span class="philosophers-category__heading">
                        <svg class="philosophers-category__svg" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <rect x="4" y="4" width="16" height="16" rx="1" stroke="currentColor" stroke-width="1.4" />
                            <path d="M8 4v16M4 9h4M4 15h4" stroke="currentColor" stroke-width="1.4" />
                            <path d="M12 9h6M12 12.5h6M12 16h4" stroke="currentColor" stroke-width="1.4"
                                stroke-linecap="round" />
                        </svg>
                        <h2 class="philosophers-category__title">Modernos</h2>
                    </span>
                    <span class="philosophers-category__icon" aria-hidden="true"></span>
                </button>
                <div class="philosophers-category__panel" data-philosophers-panel>
                    <div class="philosophers-category__body">
                        <img class="philosophers-category__image" src="" alt="">
                        <p class="philosophers-category__description">
                            A filosofia moderna surge com o rompimento da tradição medieval, valorizando a razão, o
                            método científico e o indivíduo. É marcada pelo racionalismo, empirismo e pelas grandes
                            revoluções políticas e científicas dos séculos XVII e XVIII.
                        </p>
                        <ul class="philosophers-list">
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/rene-descartes">
                                    <img class="philosophers-list__image"
                                        src="/assets/images/philosophers/Descartes.webp" alt="René Descartes">
                                    <h3 class="philosophers-list__name">René Descartes</h3>
                                    <p class="philosophers-list__description">
                                        Considerado o pai da filosofia moderna, ficou famoso pela frase "penso, logo
                                        existo" e pelo método da dúvida sistemática.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/john-locke">
                                    <img class="philosophers-list__image"
                                        src="/assets/images/philosophers/JohnLocke.webp" alt="John Locke">
                                    <h3 class="philosophers-list__name">John Locke</h3>
                                    <p class="philosophers-list__description">
                                        Um dos principais nomes do empirismo, defendia que todo conhecimento vem da
                                        experiência, rejeitando a ideia de ideias inatas.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/immanuel-kant">
                                    <img class="philosophers-list__image" src="/assets/images/philosophers/Kant.webp"
                                        alt="Immanuel Kant">
                                    <h3 class="philosophers-list__name">Immanuel Kant</h3>
                                    <p class="philosophers-list__description">
                                        Buscou conciliar racionalismo e empirismo, desenvolvendo uma filosofia
                                        crítica sobre os limites e possibilidades da razão humana.
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="philosophers-category" data-philosophers-item>
                <button class="philosophers-category__header" data-philosophers-trigger aria-expanded="false">
                    <span class="philosophers-category__heading">
                        <svg class="philosophers-category__svg" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M2 12s3.5-6.5 10-6.5S22 12 22 12s-3.5 6.5-10 6.5S2 12 2 12Z" stroke="currentColor"
                                stroke-width="1.4" stroke-linejoin="round" />
                            <circle cx="12" cy="12" r="2.6" stroke="currentColor" stroke-width="1.4" />
                        </svg>
                        <h2 class="philosophers-category__title">Contemporâneos</h2>
                    </span>
                    <span class="philosophers-category__icon" aria-hidden="true"></span>
                </button>
                <div class="philosophers-category__panel" data-philosophers-panel>
                    <div class="philosophers-category__body">
                        <img class="philosophers-category__image" src="" alt="">
                        <p class="philosophers-category__description">
                            A filosofia contemporânea abrange do século XIX até os dias atuais, questionando
                            verdades absolutas, estruturas de poder e a própria condição humana. Envolve correntes
                            como o existencialismo, a fenomenologia e o pós-estruturalismo.
                        </p>
                        <ul class="philosophers-list">
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/soren-kierkegaard">
                                    <img class="philosophers-list__image"
                                        src="/assets/images/philosophers/Kierkegaard.webp" alt="Søren Kierkegaard">
                                    <h3 class="philosophers-list__name">Søren Kierkegaard</h3>
                                    <p class="philosophers-list__description">
                                        Considerado o precursor do existencialismo, explorou a angústia, o desespero e o
                                        salto de fé
                                        como caminhos para a autenticidade da existência individual.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/friedrich-nietzsche">
                                    <img class="philosophers-list__image"
                                        src="/assets/images/philosophers/Nietzsche.webp" alt="Friedrich Nietzsche">
                                    <h3 class="philosophers-list__name">Friedrich Nietzsche</h3>
                                    <p class="philosophers-list__description">
                                        Desafiou os fundamentos da moral e da metafísica ocidentais, criando conceitos
                                        como
                                        "vontade de potência", "eterno retorno" e "super-homem" para pensar a superação
                                        dos valores estabelecidos.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/edmund-husserl">
                                    <img class="philosophers-list__image" src="/assets/images/philosophers/Husserl.webp"
                                        alt="Edmund Husserl">
                                    <h3 class="philosophers-list__name">Edmund Husserl</h3>
                                    <p class="philosophers-list__description">
                                        Fundador da fenomenologia, dedicou-se a investigar as estruturas da consciência
                                        e da experiência
                                        direta, lançando as bases para grande parte da filosofia do século XX.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/martin-heidegger">
                                    <img class="philosophers-list__image"
                                        src="/assets/images/philosophers/Heidegger.webp" alt="Martin Heidegger">
                                    <h3 class="philosophers-list__name">Martin Heidegger</h3>
                                    <p class="philosophers-list__description">
                                        Retomou a pergunta pelo sentido do ser em sua obra "Ser e Tempo", tornando-se
                                        referência essencial
                                        para a fenomenologia, o existencialismo e a filosofia contemporânea.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/jean-paul-sartre">
                                    <img class="philosophers-list__image" src="/assets/images/philosophers/Sartre.webp"
                                        alt="Jean-Paul Sartre">
                                    <h3 class="philosophers-list__name">Jean-Paul Sartre</h3>
                                    <p class="philosophers-list__description">
                                        Principal expoente do existencialismo francês, defendeu que "a existência
                                        precede a essência"
                                        e que o ser humano está condenado a ser livre, construindo a si mesmo através de
                                        suas escolhas.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/simone de-beauvoir">
                                    <img class="philosophers-list__image" src="/assets/images/philosophers/Simone.webp"
                                        alt="Simone de Beauvoir">
                                    <h3 class="philosophers-list__name">Simone de Beauvoir</h3>
                                    <p class="philosophers-list__description">
                                        Em "O Segundo Sexo", investigou a construção social da condição feminina e a
                                        busca pela liberdade,
                                        tornando-se um dos pilares do feminismo contemporâneo.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/albert-camus">
                                    <img class="philosophers-list__image" src="/assets/images/philosophers/Camus.webp"
                                        alt="Albert Camus">
                                    <h3 class="philosophers-list__name">Albert Camus</h3>
                                    <p class="philosophers-list__description">
                                        Explorou o absurdo da existência humana diante de um universo indiferente,
                                        propondo a revolta
                                        e a aceitação lúcida da vida como respostas ao sem-sentido.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/michel-foucault">
                                    <img class="philosophers-list__image" src="/assets/images/philosophers/Focault.webp"
                                        alt="Michel Foucault">
                                    <h3 class="philosophers-list__name">Michel Foucault</h3>
                                    <p class="philosophers-list__description">
                                        Investigou as relações entre poder, saber e as instituições sociais,
                                        revolucionando a forma
                                        como compreendemos a loucura, a prisão, a sexualidade e o controle social.
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?= renderFooter() ?>

    <script src="/assets/js/philosophers.js" defer></script>
</body>

</html>