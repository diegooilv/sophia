<?php

session_start();

require __DIR__ . '/../core/bootstrap.php';

$router = require __DIR__ . '/../routes/pagesRoutes.php';

$router->run();