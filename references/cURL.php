<?php
# https://www.php.net/manual/pt_BR/book.curl.php

$ch = curl_init("http://www.exemplo.com.br/");
$fp = fopen("pagina_exemplo.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

# ou 

curl_setopt_array($ch, [
    CURLOPT_FILE => $fp,
    CURLOPT_HEADER => 0
]);

# CURLOPT_... (Constantes)
# ver em: https://www.php.net/manual/pt_BR/curl.constants.php

curl_exec($ch);
if (curl_error($ch)) {
    fwrite($fp, curl_error($ch));
}

fclose($fp);