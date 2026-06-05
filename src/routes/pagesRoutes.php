<?php

$router = new Router();
$router->get('/', [HomeController::class, 'index']);
$router->get('/report/material/{id}', [ReportController::class, 'material']);
$router->get('/report/post/{id}', [ReportController::class, 'post']);
$router->get('/signup', [SignupController::class, 'signup']);
$router->post('/signup', [SignupController::class, 'signupForm']);

return $router;