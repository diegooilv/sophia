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
                            data-src="/assets/images/philosophers/banner/PreSocraticos.webp" alt="Banner Pré Socrático">
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
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Thales.webp" alt="Thales de Mileto">
                                    <h3 class="philosophers-list__name">Thales de Mileto</h3>
                                    <p class="philosophers-list__description">
                                        Considerado o primeiro filósofo da tradição ocidental, buscou explicar a origem
                                        do universo por
                                        causas naturais, defendendo a água como o princípio (arché) de todas as coisas.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/anaximandro">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Anaximandro.webp" alt="Anaximandro">
                                    <h3 class="philosophers-list__name">Anaximandro</h3>
                                    <p class="philosophers-list__description">
                                        Discípulo de Tales, propôs o "apeíron" — um princípio indefinido e ilimitado —
                                        como origem de
                                        todas as coisas, dando um passo decisivo rumo à abstração filosófica.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/anaximenes">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Anaximenes.webp" alt="Anaximenes">
                                    <h3 class="philosophers-list__name">Anaximenes</h3>
                                    <p class="philosophers-list__description">
                                        Terceiro grande nome da escola de Mileto, defendia o ar como princípio de todas
                                        as coisas,
                                        explicando as transformações da natureza por rarefação e condensação.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/pitagoras">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Pitagoras.webp" alt="Pitágoras">
                                    <h3 class="philosophers-list__name">Pitágoras</h3>
                                    <p class="philosophers-list__description">
                                        Fundador de uma influente escola filosófica e religiosa, via nos números a
                                        essência e a harmonia
                                        de todas as coisas, sendo também célebre pelo teorema geométrico que leva seu
                                        nome.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/heraclito">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Heraclito.webp" alt="Heráclito">
                                    <h3 class="philosophers-list__name">Heráclito</h3>
                                    <p class="philosophers-list__description">
                                        Conhecido como "o obscuro", defendia que tudo está em constante transformação,
                                        resumindo sua
                                        filosofia na ideia de que "não se pode entrar duas vezes no mesmo rio".
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/xenofanes">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Xenofanes.webp" alt="Xenófanes">
                                    <h3 class="philosophers-list__name">Xenófanes</h3>
                                    <p class="philosophers-list__description">
                                        Criticou a visão antropomórfica dos deuses defendida pela mitologia grega,
                                        abrindo caminho para
                                        uma concepção mais racional e unificada do divino.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/parmenides">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Parmenides.webp" alt="Parmênides">
                                    <h3 class="philosophers-list__name">Parmênides</h3>
                                    <p class="philosophers-list__description">
                                        Fundador da escola eleata, defendia que o ser é uno, eterno e imutável, e que a
                                        mudança
                                        percebida pelos sentidos é apenas ilusão.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/melisso">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Melisso.webp" alt="Melisso">
                                    <h3 class="philosophers-list__name">Melisso</h3>
                                    <p class="philosophers-list__description">
                                        Seguidor de Parmênides, aprofundou os argumentos da escola eleata defendendo que
                                        o ser é
                                        infinito, indivisível e eterno, reforçando a crítica à mudança e à
                                        multiplicidade.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/leucipo">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Leucipo.webp" alt="Leucipo">
                                    <h3 class="philosophers-list__name">Leucipo</h3>
                                    <p class="philosophers-list__description">
                                        Considerado o fundador do atomismo, propôs que toda a realidade é composta por
                                        átomos
                                        indivisíveis que se movem no vazio, lançando as bases da física clássica.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/democrito">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Democrito.webp" alt="Demócrito">
                                    <h3 class="philosophers-list__name">Demócrito</h3>
                                    <p class="philosophers-list__description">
                                        Discípulo de Leucipo, desenvolveu a teoria atomista explicando toda a natureza —
                                        inclusive a
                                        alma — a partir da combinação de átomos e vazio.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/zenao-de-eleia">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/ZenaoElera.webp" alt="Zenão de Eleia">
                                    <h3 class="philosophers-list__name">Zenão de Eleia</h3>
                                    <p class="philosophers-list__description">
                                        Discípulo de Parmênides, criou paradoxos famosos como o de Aquiles e a tartaruga
                                        para defender
                                        que o movimento e a multiplicidade são apenas ilusões dos sentidos.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/empedocles">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Empedocles.webp" alt="Empédocles">
                                    <h3 class="philosophers-list__name">Empédocles</h3>
                                    <p class="philosophers-list__description">
                                        Propôs os quatro elementos — água, terra, fogo e ar — como raízes de toda a
                                        realidade,
                                        movidos pelas forças opostas do Amor e da Discórdia.
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
                        <img class="philosophers-category__image"
                            data-src="/assets/images/philosophers/banner/Classicos.webp" alt="Banner Classicos">
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
                                        data-src="/assets/images/philosophers/Socrates.webp" alt="Sócrates">
                                    <h3 class="philosophers-list__name">Sócrates</h3>
                                    <p class="philosophers-list__description">
                                        Não deixou obras escritas, mas revolucionou a filosofia com o método
                                        socrático, baseado no diálogo e na busca da verdade através de perguntas.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/platao">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Platao.webp" alt="Platão">
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
                                        data-src="/assets/images/philosophers/Aristoteles.webp" alt="Aristóteles">
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
                            <path d="M4 20h16M5 20V9M9 20V9M15 20V9M19 20V9M3 9l9-5 9 5H3Z" stroke="currentColor"
                                stroke-width="1.4" stroke-linejoin="round" />
                        </svg>
                        <h2 class="philosophers-category__title">Helenismo</h2>
                    </span>
                    <span class="philosophers-category__icon" aria-hidden="true"></span>
                </button>
                <div class="philosophers-category__panel" data-philosophers-panel>
                    <div class="philosophers-category__body">
                        <img class="philosophers-category__image"
                            data-src="/assets/images/philosophers/banner/Helenismo.webp" alt="Banner Helenismo">
                        <p class="philosophers-category__description">
                            Após a morte de Alexandre, o Grande, o mundo grego se expandiu e entrou em contato com
                            novas culturas, dando origem a escolas filosóficas voltadas à busca da tranquilidade
                            individual diante das incertezas da existência. Estoicismo, epicurismo, ceticismo e
                            cinismo marcaram esse período, deslocando o foco da política para a ética pessoal e a
                            arte de viver bem.
                        </p>
                        <ul class="philosophers-list">
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/zenao-de-citio">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/ZenaoCitio.webp" alt="Zenão de Cítio">
                                    <h3 class="philosophers-list__name">Zenão de Cítio</h3>
                                    <p class="philosophers-list__description">
                                        Fundador do estoicismo, defendia que a virtude e a razão são os únicos bens
                                        verdadeiros,
                                        ensinando a viver em harmonia com a natureza e aceitar o que está fora do nosso
                                        controle.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/epicuro">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Epicuro.webp" alt="Epicuro">
                                    <h3 class="philosophers-list__name">Epicuro</h3>
                                    <p class="philosophers-list__description">
                                        Fundador do epicurismo, defendia o prazer moderado e a ausência de perturbação
                                        (ataraxia)
                                        como caminho para uma vida verdadeiramente feliz.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/diogenes-de-sinope">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Diogenes.webp" alt="Diógenes de Sinope">
                                    <h3 class="philosophers-list__name">Diógenes de Sinope</h3>
                                    <p class="philosophers-list__description">
                                        Principal expoente do cinismo, pregava uma vida simples e livre das convenções
                                        sociais,
                                        desafiando os costumes de sua época através de atitudes provocativas.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/pirro-de-elis">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Pirro.webp" alt="Pirro de Élis">
                                    <h3 class="philosophers-list__name">Pirro de Élis</h3>
                                    <p class="philosophers-list__description">
                                        Fundador do ceticismo, defendia a suspensão do juízo (epoché) diante das
                                        incertezas do
                                        conhecimento como caminho para alcançar a tranquilidade da alma.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/epicteto">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Epicteto.webp" alt="Epicteto">
                                    <h3 class="philosophers-list__name">Epicteto</h3>
                                    <p class="philosophers-list__description">
                                        Filósofo estoico que viveu como escravo antes de ser liberto, ensinava que a
                                        felicidade
                                        depende de distinguir o que está sob nosso controle daquilo que não está.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/seneca">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Seneca.webp" alt="Sêneca">
                                    <h3 class="philosophers-list__name">Sêneca</h3>
                                    <p class="philosophers-list__description">
                                        Filósofo estoico romano e conselheiro de Nero, escreveu extensamente sobre ética
                                        prática,
                                        o controle das paixões e a arte de viver com sabedoria e serenidade.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/marco-aurelio">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/MarcoAurelio.webp" alt="Marco Aurélio">
                                    <h3 class="philosophers-list__name">Marco Aurélio</h3>
                                    <p class="philosophers-list__description">
                                        Imperador romano e um dos últimos grandes estoicos, registrou em "Meditações"
                                        reflexões
                                        pessoais sobre virtude, aceitação e o exercício da razão diante das
                                        adversidades.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/crisipo-de-solis">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Crisipo.webp" alt="Crísipo de Solis">
                                    <h3 class="philosophers-list__name">Crísipo de Solis</h3>
                                    <p class="philosophers-list__description">
                                        Considerado o segundo fundador do estoicismo, sistematizou e consolidou a
                                        doutrina da escola
                                        após Zenão de Cítio, sendo essencial para sua sobrevivência e difusão.
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
                        <img class="philosophers-category__image" data-src="/assets/images/philosophers/banner/Medievais.webp" alt="">
                        <p class="philosophers-category__description">
                            A filosofia medieval foi profundamente marcada pela tentativa de conciliar fé e razão,
                            tendo como pano de fundo o pensamento cristão, judaico e islâmico. Destacam-se os
                            debates sobre a existência de Deus, a alma e a relação entre teologia e filosofia.
                        </p>
                        <ul class="philosophers-list">
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/santo-agostinho">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Agostinho.webp" alt="Santo Agostinho">
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
                                        data-src="/assets/images/philosophers/Tomas de Aquino.webp"
                                        alt="Tomás de Aquino">
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
                                        data-src="/assets/images/philosophers/Guilherme.webp" alt="Guilherme de Ockham">
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
                        <img class="philosophers-category__image" data-src="/assets/images/philosophers/banner/Modernos.webp" alt="Banner Modernos">
                        <p class="philosophers-category__description">
                            A filosofia moderna surge com o rompimento da tradição medieval, valorizando a razão, o
                            método científico e o indivíduo. É marcada pelo racionalismo, empirismo e pelas grandes
                            revoluções políticas e científicas dos séculos XVII e XVIII.
                        </p>
                        <ul class="philosophers-list">
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/rene-descartes">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Descartes.webp" alt="René Descartes">
                                    <h3 class="philosophers-list__name">René Descartes</h3>
                                    <p class="philosophers-list__description">
                                        Considerado o pai da filosofia moderna, defendeu a dúvida sistemática como
                                        método e sintetizou seu
                                        pensamento na célebre frase "penso, logo existo".
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/david-hume">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Hume.webp" alt="David Hume">
                                    <h3 class="philosophers-list__name">David Hume</h3>
                                    <p class="philosophers-list__description">
                                        Um dos maiores nomes do empirismo, sustentava que todo conhecimento nasce da
                                        experiência sensível,
                                        questionando a validade racional da causalidade e das certezas metafísicas.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/immanuel-kant">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Kant.webp" alt="Immanuel Kant">
                                    <h3 class="philosophers-list__name">Immanuel Kant</h3>
                                    <p class="philosophers-list__description">
                                        Propôs uma síntese entre racionalismo e empirismo através da filosofia crítica,
                                        investigando
                                        os limites e as condições de possibilidade do conhecimento humano.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/georg-wilhelm-friedrich-hegel">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Hegel.webp" alt="Hegel">
                                    <h3 class="philosophers-list__name">G. W. F. Hegel</h3>
                                    <p class="philosophers-list__description">
                                        Criador da dialética como método filosófico, entendia que a realidade e a
                                        história avançam
                                        através de contradições e superações, marcando profundamente o pensamento
                                        moderno.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/thomas-hobbes">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Hobbes.webp" alt="Thomas Hobbes">
                                    <h3 class="philosophers-list__name">Thomas Hobbes</h3>
                                    <p class="philosophers-list__description">
                                        Precursor do contratualismo, defendia que os indivíduos abrem mão de parte de
                                        sua liberdade
                                        em favor de um Estado soberano capaz de garantir ordem e segurança.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/john-locke">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/JohnLocke.webp" alt="John Locke">
                                    <h3 class="philosophers-list__name">John Locke</h3>
                                    <p class="philosophers-list__description">
                                        Pai do liberalismo político e um dos principais nomes do empirismo, defendia a
                                        mente humana
                                        como uma "tábula rasa" e o governo como garantidor dos direitos naturais dos
                                        cidadãos.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/jean-jacques-rousseau">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Rousseau.webp"
                                        alt="Jean-Jacques Rousseau">
                                    <h3 class="philosophers-list__name">Jean-Jacques Rousseau</h3>
                                    <p class="philosophers-list__description">
                                        Defendia que a sociedade deveria se organizar em torno da vontade geral, vendo
                                        no contrato
                                        social o caminho para conciliar liberdade individual e vida coletiva.
                                    </p>
                                </a>
                            </li>
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/francis-bacon">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Bacon.webp" alt="Francis Bacon">
                                    <h3 class="philosophers-list__name">Francis Bacon</h3>
                                    <p class="philosophers-list__description">
                                        Pioneiro do método científico moderno, defendia que o conhecimento deve nascer
                                        da observação
                                        e da experimentação, lançando as bases empíricas da ciência.
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
                        <img class="philosophers-category__image" data-src="/assets/images/philosophers/banner/Contemporaneos.webp" alt="Banner Conteporaneos">
                        <p class="philosophers-category__description">
                            A filosofia contemporânea abrange do século XIX até os dias atuais, questionando
                            verdades absolutas, estruturas de poder e a própria condição humana. Envolve correntes
                            como o existencialismo, a fenomenologia e o pós-estruturalismo.
                        </p>
                        <ul class="philosophers-list">
                            <li class="philosophers-list__item">
                                <a class="philosophers-list__link" href="/philosophers/soren-kierkegaard">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Kierkegaard.webp" alt="Søren Kierkegaard">
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
                                        data-src="/assets/images/philosophers/Nietzsche.webp" alt="Friedrich Nietzsche">
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
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Husserl.webp" alt="Edmund Husserl">
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
                                        data-src="/assets/images/philosophers/Heidegger.webp" alt="Martin Heidegger">
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
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Sartre.webp" alt="Jean-Paul Sartre">
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
                                <a class="philosophers-list__link" href="/philosophers/simone-de-beauvoir">
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Simone.webp" alt="Simone de Beauvoir">
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
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Camus.webp" alt="Albert Camus">
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
                                    <img class="philosophers-list__image"
                                        data-src="/assets/images/philosophers/Foucault.webp" alt="Michel Foucault">
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