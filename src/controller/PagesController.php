<?php

class PagesController extends Controller
{

    public static function index()
    {
        $navItems = [
            'Início' => '/',
            'Sobre' => '/sobre',
            'Entrar' => '/entrar',
        ];

        $user = new UserModel(
            1,
            "Diego",
            "diegooilv",
            "diego@sophia.com",
            "password",
            "oioi",
            "/assets/users/diego.png",
            "admin"
        );

        $post = new PostModel(
            1,
            1,
            1,
            "O que é realmente a realidade?",
            "Uma reflexão sobre como percebemos o mundo e se ele existe independente da nossa consciência.",
            "/assets/images/post.png",
            ["https://pt.wikipedia.org/wiki/Realidade.pdf"]
        );

        $posts = [];
        $posts[] = new PostViewModel($post, $user);

        $material = new MaterialModel(
            1,
            "Nietzsche",
            1,
            "Nietzsche lindo",
            "/assets/images/post.png",
            "https://pt.wikipedia.org/wiki/Friedrich_Nietzsche.doc"
        );

        $materials = [

            new MaterialViewModel(
                new MaterialModel(
                    1,
                    "Além do Bem e do Mal",
                    1,
                    "Uma análise das críticas de Nietzsche à moral tradicional.",
                    "/assets/images/post.png",
                    "https://example.com/nietzsche.pdf"
                ),
                $user
            )];

        include __DIR__ . '/../views/home.php';
    }
}