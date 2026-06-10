<?php
# https://www.php.net/manual/pt_BR/book.pdo.php

$user = 'root';
$pass = '1234';

$nome = 'Diego';
$valor = 'Info';

# Conectar
try {
    $dbh = new PDO(
        'mysql:host=localhost;dbname=test',
        $user,
        $pass,
        [
            # Parâmetros de conexão, exemplo:
            PDO::ATTR_PERSISTENT => true
        ]
    );

    # Constantes:
    # https://www.php.net/manual/pt_BR/pdo.constants.php

} catch (PDOException $e) {
    die($e->getMessage());
}

# Executar ação:

# Preparar
$stmt = $dbh->prepare(
    "INSERT INTO REGISTRY (name, value) VALUES (?, ?)"
);

# Executar
$stmt->execute([$nome, $valor]);

# Fechar conexão
$stmt = null;
$dbh = null;