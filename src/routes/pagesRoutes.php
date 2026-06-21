<?php

$router = new Router();
$router->get('/', [HomeController::class, 'index']);
$router->get('/report/material/{id}', [ReportController::class, 'material']);
$router->get('/report/post/{id}', [ReportController::class, 'post']);
$router->get('/signup', [SignupController::class, 'signup']);
$router->post('/signup', [SignupController::class, 'signupForm']);
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'loginForm']);
$router->get('/about', [AboutController::class, 'index']);

$router->get('/ia', [ChatBotController::class, 'index']);
$router->post('/ia', [ChatBotController::class, 'perguntar']);

$router->post('/auth/check', [AuthController::class, 'check']);

return $router;