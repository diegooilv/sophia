<?php

# Cross-Site Request Forgery
# Falsificação de Requisição entre Sites
class CsrfService
{
    # 'csrf' !!!
    public static function create()
    {
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
        return;
    }

    public static function check()
    {
        if (
            !isset($_SESSION['csrf']) ||
            !isset($_POST['csrf']) ||
            !hash_equals($_SESSION['csrf'], $_POST['csrf'])
        ) {
            http_response_code(403);
            exit('CSRF inválido');
        }
    }

    public static function token()
    {
        if (!isset($_SESSION['csrf'])) {
            self::create();
        }

        return $_SESSION['csrf'];
    }

}