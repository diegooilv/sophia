<?php

$router = new Router();
$router->get('/', [HomeController::class, 'index']);

return $router;