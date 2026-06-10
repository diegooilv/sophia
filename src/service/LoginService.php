<?php
class LoginService
{
    public function getHeaderItems()
    {
        return [
            'Início' => '/',
            'Sobre' => '/about',
            'Criar Conta' => '/signup',
        ];
    }
}