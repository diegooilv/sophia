<?php
class ErrorController
{
    public function notFound()
    {
        $navItems = [
            'Início' => '/',
            'Sobre' => '/sobre',
            'Entrar' => '/entrar',
        ];

        require __DIR__ . '/../views/404.php';
    }
}