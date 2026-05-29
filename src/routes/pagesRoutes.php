<?php

$router = new Router();
$router->get('/', [PagesController::class, 'index']);

return $router;