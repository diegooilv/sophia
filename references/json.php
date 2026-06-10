<?php
# https://www.php.net/manual/pt_BR/book.json.php

# json_decode(); — Decodifica uma string JSON
# json_encode(); — Retorna a representação JSON de um valor
# json_validate(); — Verifica se uma string contém JSON válido

$dados = [
    "nome" => "Diego",
    "curso" => "Info"
];

$json = json_encode($dados);

echo $json;
echo "<br>";

$array = json_decode($json, true);

echo $array['nome'];
echo "<br>";
echo $array['curso'];