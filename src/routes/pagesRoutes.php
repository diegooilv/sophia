<?php

$router = new Router();
$router->get('/', [HomeController::class, 'index']);
$router->get('/report/material/{id}', [ReportController::class, 'material']);
$router->get('/report/post/{id}', [ReportController::class, 'post']);

return $router;