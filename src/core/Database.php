<?php

class Database
{
    private static ?PDO $instance = null;

    public static function connect(): PDO
    {
        if (self::$instance === null) {
            $config = require __DIR__ . '/../config/database.php';

            $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

            try {
                self::$instance = new PDO($dsn, $config['user'], $config['pass'], [

                    // Faz o PDO lançar exceções quando ocorrer erro no banco
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

                    // Define o formato padrão dos resultados como array associativo
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

                    // Desativa a emulação de prepared statements pelo PHP
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]);
            } catch (PDOException $e) {
                error_log('Erro na conexão com o banco: ' . $e->getMessage());
                http_response_code(500);
                die('Erro interno do servidor.');
            }
        }

        return self::$instance;
    }
}