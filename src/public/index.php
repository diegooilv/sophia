<?php
session_start();

//
require __DIR__ . '/../core/bootstrap.php';

$rateLimit = new RateLimitService();
$rateLimit->check();

header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');

$router = require __DIR__ . '/../routes/pagesRoutes.php';

$router->run();