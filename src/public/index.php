<?php

require __DIR__ . '/../config/bootstrap.php';

$router = require __DIR__ . '/../routes/pagesRoutes.php';

$router->run();