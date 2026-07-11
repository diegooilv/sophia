<?php
class PhilosophersService
{
    public function getPhilosopher($name)
    {
        $base = '/assets/images/philosophers/';

        $philosophers = [
            'thales-de-mileto' => [
                'name' => 'Thales de Mileto',
                'era' => 'Pré-Socráticos',
                'era_slug' => 'pre-socraticos',
                'birth_year' => '624 a.C.',
                'death_year' => '546 a.C.',
                'birth_place' => 'Mileto, Ásia Menor',
                'school' => 'Escola de Mileto',
                'image' => $base . 'Thales.webp',
                'image_alt' => 'Busto de Thales de Mileto',
                'quote' => 'Conhece-te a ti mesmo.',
                'bio' => 'Considerado o primeiro filósofo da história ocidental, Thales de Mileto '
                    . 'buscou explicar a origem do universo sem recorrer a mitos, defendendo que a água '
                    . 'era o princípio (arché) de todas as coisas. Foi também matemático e astrônomo, '
                    . 'sendo creditado por prever um eclipse solar.',
                'main_ideas' => [
                    'A água como princípio (arché) de todas as coisas',
                    'Explicação racional dos fenômenos naturais, sem recorrer aos mitos',
                    'Contribuições pioneiras à geometria e à astronomia',
                ],
                'works' => [],
                'influences' => [],
                'influenced' => ['Anaximandro', 'Anaxímenes'],
                'legacy' => null,
                'death_place' => null,
            ],

            'anaximandro' => [
                'name' => 'Anaximandro',
                'era' => 'Pré-Socráticos',
                'era_slug' => 'pre-socraticos',
                'birth_year' => '610 a.C.',
                'death_year' => '546 a.C.',
                'birth_place' => 'Mileto, Ásia Menor',
                'school' => 'Escola de Mileto',
                'image' => $base . 'Anaximandro.webp',
                'image_alt' => 'Ilustração de Anaximandro',
                'quote' => 'O princípio de todas as coisas é o ápeiron.',
                'bio' => 'Discípulo de Tales, Anaximandro propôs o "ápeiron" — o indefinido, ilimitado '
                    . 'e eterno — como origem de tudo o que existe. Foi um dos primeiros a elaborar um mapa '
                    . 'do mundo conhecido e a especular sobre a origem dos seres vivos.',
                'main_ideas' => [
                    'O ápeiron como princípio ilimitado e indeterminado de todas as coisas',
                    'Uma cosmologia baseada em forças opostas (quente/frio, seco/úmido)',
                    'Especulações pioneiras sobre a origem dos seres vivos',
                ],
                'works' => [],
                'influences' => ['Thales de Mileto'],
                'influenced' => ['Anaxímenes', 'Heráclito de Éfeso'],
                'legacy' => null,
                'death_place' => null,
            ],

            'pitagoras' => [
                'name' => 'Pitágoras',
                'era' => 'Pré-Socráticos',
                'era_slug' => 'pre-socraticos',
                'birth_year' => '570 a.C.',
                'death_year' => '495 a.C.',
                'birth_place' => 'Samos, Grécia Antiga',
                'school' => 'Pitagorismo',
                'image' => $base . 'Pitagoras.webp',
                'image_alt' => 'Busto de Pitágoras',
                'quote' => 'Tudo é número.',
                'bio' => 'Pitágoras foi um filósofo e matemático grego, fundador de uma escola '
                    . 'filosófica e religiosa em Crotona, no sul da Itália. Para ele, os números eram a '
                    . 'essência última de toda a realidade, e o cosmos poderia ser compreendido através '
                    . 'de relações matemáticas e harmônicas.',
                'main_ideas' => [
                    'Os números como princípio fundamental de todas as coisas',
                    'A harmonia matemática presente na música e no cosmos',
                    'A doutrina da metempsicose (transmigração das almas)',
                ],
                'works' => [],
                'influences' => ['Thales de Mileto', 'Anaximandro'],
                'influenced' => ['Platão', 'Filolau', 'Euclides'],
                'legacy' => null,
                'death_place' => null,
            ],

            //

            'socrates' => [
                'name' => 'Sócrates',
                'era' => 'Clássicos',
                'era_slug' => 'classicos',
                'birth_year' => '470 a.C.',
                'death_year' => '399 a.C.',
                'birth_place' => 'Atenas, Grécia Antiga',
                'school' => 'Filosofia Clássica Grega',
                'image' => $base . 'Socrates.webp',
                'image_alt' => 'Busto de Sócrates',
                'quote' => 'Só sei que nada sei.',
                'bio' => 'Sócrates não deixou obras escritas, mas revolucionou a filosofia com o '
                    . 'método socrático, baseado no diálogo e na busca da verdade através de perguntas. '
                    . 'Foi condenado à morte em Atenas, acusado de corromper a juventude e não reconhecer '
                    . 'os deuses da cidade.',
                'main_ideas' => [
                    'O método socrático: ensinar por meio de perguntas e diálogo',
                    'A maiêutica, a "arte de fazer nascer" ideias no interlocutor',
                    'A busca pela virtude e pelo autoconhecimento como fins da filosofia',
                ],
                'works' => [],
                'influences' => [],
                'influenced' => ['Platão', 'Antístenes', 'Xenofonte'],
                'legacy' => null,
                'death_place' => 'Atenas, Grécia Antiga',
            ],

            'platao' => [
                'name' => 'Platão',
                'era' => 'Clássicos',
                'era_slug' => 'classicos',
                'birth_year' => '428 a.C.',
                'death_year' => '348 a.C.',
                'birth_place' => 'Atenas, Grécia Antiga',
                'school' => 'Platonismo',
                'image' => $base . 'Platao.webp',
                'image_alt' => 'Busto de Platão',
                'quote' => 'A ignorância é a raiz e o caule de todo mal.',
                'bio' => 'Discípulo de Sócrates, Platão criou a Teoria das Ideias e fundou a Academia, '
                    . 'uma das primeiras instituições de ensino superior do Ocidente. Seus diálogos abordam '
                    . 'temas como justiça, política, conhecimento e a natureza da alma.',
                'main_ideas' => [
                    'A Teoria das Ideias (ou Formas), realidades perfeitas e imutáveis',
                    'O Mito da Caverna como alegoria do conhecimento e da ignorância',
                    'A tripartição da alma (razão, ânimo e desejo)',
                ],
                'works' => [
                    ['title' => 'A República', 'year' => null],
                    ['title' => 'O Banquete', 'year' => null],
                    ['title' => 'Fédon', 'year' => null],
                ],
                'influences' => ['Sócrates', 'Pitágoras'],
                'influenced' => ['Aristóteles', 'Plotino', 'Santo Agostinho'],
                'legacy' => null,
                'death_place' => 'Atenas, Grécia Antiga',
            ],

            'aristoteles' => [
                'name' => 'Aristóteles',
                'era' => 'Clássicos',
                'era_slug' => 'classicos',
                'birth_year' => '384 a.C.',
                'death_year' => '322 a.C.',
                'birth_place' => 'Estagira, Macedônia',
                'school' => 'Peripatetismo',
                'image' => $base . 'Aristoteles.webp',
                'image_alt' => 'Busto de Aristóteles',
                'quote' => 'Somos aquilo que fazemos repetidamente.',
                'bio' => 'Aluno de Platão, Aristóteles sistematizou a lógica e contribuiu para '
                    . 'diversas áreas do conhecimento, como ética, política, biologia e metafísica. '
                    . 'Fundou o Liceu em Atenas e foi tutor de Alexandre, o Grande.',
                'main_ideas' => [
                    'A lógica formal e o silogismo como instrumentos do pensamento',
                    'A teoria das quatro causas (material, formal, eficiente e final)',
                    'A ética das virtudes e o conceito de "justo meio"',
                ],
                'works' => [
                    ['title' => 'Ética a Nicômaco', 'year' => null],
                    ['title' => 'Política', 'year' => null],
                    ['title' => 'Metafísica', 'year' => null],
                ],
                'influences' => ['Platão'],
                'influenced' => ['Tomás de Aquino', 'Avicena', 'Averróis'],
                'legacy' => null,
                'death_place' => 'Calcis, Eubeia',
            ],

            //

            'santo-agostinho' => [
                'name' => 'Santo Agostinho',
                'era' => 'Medievais',
                'era_slug' => 'medievais',
                'birth_year' => '354',
                'death_year' => '430',
                'birth_place' => 'Tagaste, Numídia (atual Argélia)',
                'school' => 'Patrística',
                'image' => $base . 'Agostinho.webp',
                'image_alt' => 'Pintura de Santo Agostinho',
                'quote' => 'Ama e faz o que quiseres.',
                'bio' => 'Santo Agostinho uniu a filosofia platônica ao cristianismo, discutindo '
                    . 'temas como o livre-arbítrio, o tempo e a existência do mal. Sua obra teve influência '
                    . 'decisiva sobre a teologia cristã ocidental por mais de mil anos.',
                'main_ideas' => [
                    'A conciliação entre fé cristã e filosofia platônica',
                    'O problema do mal e do livre-arbítrio humano',
                    'A reflexão sobre o tempo e a memória como experiência interior',
                ],
                'works' => [
                    ['title' => 'Confissões', 'year' => '397'],
                    ['title' => 'A Cidade de Deus', 'year' => '426'],
                ],
                'influences' => ['Platão', 'Plotino'],
                'influenced' => ['Tomás de Aquino', 'Descartes'],
                'legacy' => null,
                'death_place' => 'Hipona, Numídia',
            ],

            'tomas-de-aquino' => [
                'name' => 'Tomás de Aquino',
                'era' => 'Medievais',
                'era_slug' => 'medievais',
                'birth_year' => '1225',
                'death_year' => '1274',
                'birth_place' => 'Roccasecca, Reino da Sicília',
                'school' => 'Escolástica',
                'image' => $base . 'Tomas de Aquino.webp',
                'image_alt' => 'Pintura de Tomás de Aquino',
                'quote' => 'A fé supõe o conhecimento natural, e a graça supõe a natureza.',
                'bio' => 'Tomás de Aquino combinou a filosofia aristotélica com a teologia cristã, '
                    . 'propondo cinco vias racionais para provar a existência de Deus. Sua obra é considerada '
                    . 'o auge da escolástica medieval.',
                'main_ideas' => [
                    'As cinco vias para demonstrar racionalmente a existência de Deus',
                    'A harmonia entre razão e fé como caminhos complementares para a verdade',
                    'A retomada e cristianização da filosofia aristotélica',
                ],
                'works' => [
                    ['title' => 'Suma Teológica', 'year' => '1265–1274'],
                    ['title' => 'Suma Contra os Gentios', 'year' => '1264'],
                ],
                'influences' => ['Aristóteles', 'Santo Agostinho'],
                'influenced' => ['Escolástica tardia', 'Igreja Católica'],
                'legacy' => null,
                'death_place' => 'Fossanova, Itália',
            ],

            'guilherme-de-ockham' => [
                'name' => 'Guilherme de Ockham',
                'era' => 'Medievais',
                'era_slug' => 'medievais',
                'birth_year' => '1285',
                'death_year' => '1347',
                'birth_place' => 'Ockham, Surrey, Inglaterra',
                'school' => 'Nominalismo',
                'image' => $base . 'Guilherme.webp',
                'image_alt' => 'Ilustração de Guilherme de Ockham',
                'quote' => 'Não se deve multiplicar entidades além do necessário.',
                'bio' => 'Guilherme de Ockham ficou conhecido pela "navalha de Ockham", princípio '
                    . 'que defende a simplicidade nas explicações filosóficas e científicas. Foi um crítico '
                    . 'importante do realismo escolástico, defendendo o nominalismo.',
                'main_ideas' => [
                    'A navalha de Ockham: preferir sempre a explicação mais simples',
                    'O nominalismo, rejeitando a existência real dos universais',
                    'A separação entre verdades da fé e verdades da razão',
                ],
                'works' => [
                    ['title' => 'Suma de Lógica', 'year' => null],
                ],
                'influences' => ['Duns Scotus'],
                'influenced' => ['Ciência moderna', 'Empirismo'],
                'legacy' => null,
                'death_place' => 'Munique, Baviera',
            ],

            //

            'rene-descartes' => [
                'name' => 'René Descartes',
                'era' => 'Modernos',
                'era_slug' => 'modernos',
                'birth_year' => '1596',
                'death_year' => '1650',
                'birth_place' => 'La Haye en Touraine, França',
                'school' => 'Racionalismo',
                'image' => $base . 'Descartes.webp',
                'image_alt' => 'Pintura de René Descartes',
                'quote' => 'Penso, logo existo.',
                'bio' => 'Considerado o pai da filosofia moderna, Descartes ficou famoso pela frase '
                    . '"penso, logo existo" e pelo método da dúvida sistemática, que buscava fundamentar o '
                    . 'conhecimento em certezas absolutas e inabaláveis.',
                'main_ideas' => [
                    'O método da dúvida sistemática (dúvida hiperbólica)',
                    'O cogito ergo sum como primeira certeza filosófica',
                    'O dualismo entre res cogitans (mente) e res extensa (matéria)',
                ],
                'works' => [
                    ['title' => 'Discurso do Método', 'year' => '1637'],
                    ['title' => 'Meditações Metafísicas', 'year' => '1641'],
                ],
                'influences' => ['Santo Agostinho'],
                'influenced' => ['Spinoza', 'Leibniz', 'Kant'],
                'legacy' => null,
                'death_place' => 'Estocolmo, Suécia',
            ],

            'john-locke' => [
                'name' => 'John Locke',
                'era' => 'Modernos',
                'era_slug' => 'modernos',
                'birth_year' => '1632',
                'death_year' => '1704',
                'birth_place' => 'Wrington, Inglaterra',
                'school' => 'Empirismo',
                'image' => $base . 'JohnLocke.webp',
                'image_alt' => 'Pintura de John Locke',
                'quote' => 'A mente é como uma folha em branco (tabula rasa).',
                'bio' => 'Um dos principais nomes do empirismo, John Locke defendia que todo '
                    . 'conhecimento vem da experiência, rejeitando a ideia de ideias inatas. Suas teorias '
                    . 'políticas influenciaram diretamente o liberalismo e as revoluções americana e '
                    . 'francesa.',
                'main_ideas' => [
                    'A tabula rasa: a mente nasce vazia, preenchida pela experiência',
                    'A teoria dos direitos naturais (vida, liberdade e propriedade)',
                    'A defesa do governo limitado e da separação de poderes',
                ],
                'works' => [
                    ['title' => 'Ensaio Acerca do Entendimento Humano', 'year' => '1689'],
                    ['title' => 'Segundo Tratado sobre o Governo', 'year' => '1689'],
                ],
                'influences' => ['Francis Bacon', 'Thomas Hobbes'],
                'influenced' => ['Voltaire', 'Rousseau', 'Thomas Jefferson'],
                'legacy' => null,
                'death_place' => 'Essex, Inglaterra',
            ],

            'immanuel-kant' => [
                'name' => 'Immanuel Kant',
                'era' => 'Modernos',
                'era_slug' => 'modernos',
                'birth_year' => '1724',
                'death_year' => '1804',
                'birth_place' => 'Königsberg, Prússia',
                'school' => 'Idealismo Transcendental',
                'image' => $base . 'Kant.webp',
                'image_alt' => 'Pintura de Immanuel Kant',
                'quote' => 'Aja apenas segundo uma máxima tal que possas ao mesmo tempo querer que ela '
                    . 'se torne lei universal.',
                'bio' => 'Immanuel Kant buscou conciliar racionalismo e empirismo, desenvolvendo uma '
                    . 'filosofia crítica sobre os limites e possibilidades da razão humana. É considerado '
                    . 'um dos pensadores mais influentes da história da filosofia ocidental.',
                'main_ideas' => [
                    'A distinção entre fenômeno e coisa-em-si',
                    'O imperativo categórico como fundamento da ética',
                    'As categorias a priori do entendimento',
                ],
                'works' => [
                    ['title' => 'Crítica da Razão Pura', 'year' => '1781'],
                    ['title' => 'Fundamentação da Metafísica dos Costumes', 'year' => '1785'],
                    ['title' => 'Crítica da Razão Prática', 'year' => '1788'],
                ],
                'influences' => ['David Hume', 'Jean-Jacques Rousseau', 'Descartes'],
                'influenced' => ['Hegel', 'Schopenhauer', 'John Rawls'],
                'legacy' => null,
                'death_place' => 'Königsberg, Prússia',
            ],

            //

            'friedrich-nietzsche' => [
                'name' => 'Friedrich Nietzsche',
                'era' => 'Contemporâneos',
                'era_slug' => 'contemporaneos',
                'birth_year' => '1844',
                'death_year' => '1900',
                'birth_place' => 'Röcken, Prússia',
                'school' => 'Filosofia da Vida',
                'image' => $base . 'Nietzsche.webp',
                'image_alt' => 'Fotografia de Friedrich Nietzsche',
                'quote' => 'Deus está morto.',
                'bio' => 'Nietzsche criticou os valores morais tradicionais e a metafísica ocidental, '
                    . 'propondo conceitos como a "vontade de potência" e o "super-homem". Sua filosofia teve '
                    . 'profundo impacto sobre a literatura, a psicologia e a filosofia do século XX.',
                'main_ideas' => [
                    'A crítica à moral tradicional e ao niilismo',
                    'A vontade de potência como impulso fundamental da vida',
                    'O conceito de übermensch (super-homem) e o eterno retorno',
                ],
                'works' => [
                    ['title' => 'Assim Falou Zaratustra', 'year' => '1883–1885'],
                    ['title' => 'Além do Bem e do Mal', 'year' => '1886'],
                    ['title' => 'A Genealogia da Moral', 'year' => '1887'],
                ],
                'influences' => ['Arthur Schopenhauer'],
                'influenced' => ['Sartre', 'Foucault', 'Heidegger'],
                'legacy' => null,
                'death_place' => 'Weimar, Alemanha',
            ],

            'jean-paul-sartre' => [
                'name' => 'Jean-Paul Sartre',
                'era' => 'Contemporâneos',
                'era_slug' => 'contemporaneos',
                'birth_year' => '1905',
                'death_year' => '1980',
                'birth_place' => 'Paris, França',
                'school' => 'Existencialismo',
                'image' => $base . 'Sartre.webp',
                'image_alt' => 'Fotografia de Jean-Paul Sartre',
                'quote' => 'A existência precede a essência.',
                'bio' => 'Principal nome do existencialismo, Sartre defendia que "a existência '
                    . 'precede a essência" e que o ser humano é radicalmente livre, responsável por criar '
                    . 'seu próprio sentido em um mundo sem propósito predefinido.',
                'main_ideas' => [
                    'A existência precede a essência: o homem se constrói através de suas escolhas',
                    'A liberdade radical e a "angústia" da responsabilidade',
                    'O conceito de má-fé (auto-engano existencial)',
                ],
                'works' => [
                    ['title' => 'O Ser e o Nada', 'year' => '1943'],
                    ['title' => 'O Existencialismo é um Humanismo', 'year' => '1946'],
                ],
                'influences' => ['Nietzsche', 'Husserl', 'Heidegger'],
                'influenced' => ['Simone de Beauvoir', 'Frantz Fanon'],
                'legacy' => null,
                'death_place' => 'Paris, França',
            ],

            'michel-foucault' => [
                'name' => 'Michel Foucault',
                'era' => 'Contemporâneos',
                'era_slug' => 'contemporaneos',
                'birth_year' => '1926',
                'death_year' => '1984',
                'birth_place' => 'Poitiers, França',
                'school' => 'Pós-estruturalismo',
                'image' => $base . 'Focault.webp',
                'image_alt' => 'Fotografia de Michel Foucault',
                'quote' => 'Onde há poder, há resistência.',
                'bio' => 'Foucault analisou as relações entre poder, saber e as instituições sociais, '
                    . 'influenciando profundamente as ciências humanas contemporâneas. Investigou como '
                    . 'prisões, hospitais e escolas moldam corpos e subjetividades.',
                'main_ideas' => [
                    'A relação indissociável entre poder e saber',
                    'A genealogia como método de análise histórica das instituições',
                    'A biopolítica e o controle disciplinar dos corpos',
                ],
                'works' => [
                    ['title' => 'Vigiar e Punir', 'year' => '1975'],
                    ['title' => 'História da Sexualidade', 'year' => '1976–1984'],
                ],
                'influences' => ['Nietzsche', 'Georges Canguilhem'],
                'influenced' => ['Judith Butler', 'Giorgio Agamben'],
                'legacy' => null,
                'death_place' => 'Paris, França',
            ],

        ];

        $slug = strtolower(trim($name));

        return $philosophers[$slug] ?? null;
    }
}