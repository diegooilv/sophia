<?php
# https://cloudinary.com/documentation/php_integration

# Auxílio de: Ask Cloudinary AI.

// upload.php (exemplo)
require 'vendor/autoload.php';

use Dotenv\Dotenv;
use Cloudinary\Cloudinary;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = new Configuration($_ENV['CLOUDINARY_URL']);
$cld = new Cloudinary($config);
$upload = new UploadApi($config);

try {
    $response = $upload->upload('images/people-walking.jpg');
    echo $response['secure_url']; // URL pública pra exibir ou baixar
} catch (Exception $e) {
    echo 'Erro: ' . $e->getMessage();
}

# após essa base, adaptado ao projeto.