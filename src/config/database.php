<?php

return [
    // Variáveis de ambiente vindas do Docker Compose (.env)
    'port' => getenv('DB_PORT'),
    'dbname' => getenv('DB_NAME'),
    'user' => getenv('DB_USER'),
    'pass' => getenv('DB_PASS'),
    'charset' => 'utf8mb4',
];