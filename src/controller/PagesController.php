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

        include __DIR__ . '/../views/home.php';
    }
}