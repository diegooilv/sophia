<?php

class ChatBotController extends Controller
{
    private GroqService $service;

    public function __construct()
    {
        $this->service = new GroqService();
    }

    public function index(): void
    {
        $this->view('ia', [
            'navItems' => [
                'Início' => '/',
                'Sobre' => '/about',
                'Entrar' => '/login',
            ],
            'pergunta' => null,
            'resposta' => null,
        ]);
    }

    public function perguntar(): void
    {
        $pergunta = trim($_POST['prompt'] ?? '');

        if (empty($pergunta)) {
            header('Location: /sophia');
            exit;
        }

        $chat = $this->service->chat([
            [
                'role' => 'user',
                'content' => $pergunta
            ]
        ]);
        $resposta = $this->service->getContent($chat);

        $this->view('ia', [
            'navItems' => [
                'Início' => '/',
                'Sobre' => '/about',
            ],
            'pergunta' => $pergunta,
            'resposta' => $resposta,
        ]);
    }
}