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

        $posts = [];

        $posts[] = new PostModel(
            1,
            "diegooilv",
            "O que é realmente a realidade?",
            "Uma reflexão sobre como percebemos o mundo e se ele existe independente da nossa consciência.",
            "/assets/images/post.png",
            ["https://pt.wikipedia.org/wiki/Realidade"],
            "Diego",
            "/assets/users/diego.png"
        );

        include __DIR__ . '/../views/home.php';
    }
}