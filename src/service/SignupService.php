<?php
class SignupService
{
    public function getHeaderItems()
    {
        return [
            'Início' => '/',
            'Sobre' => '/about',
            'Entrar' => '/login',
        ];
    }
}