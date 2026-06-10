<?php
# https://console.groq.com/docs/api-reference

# url: https://api.groq.com/openai/v1/chat/completions

class GroqService
{
    private string $apiKey;
    private string $model;
    private string $apiUrl = 'https://api.groq.com/openai/v1/chat/completions';

    public function __construct(string $model = 'llama-3.3-70b-versatile')
    {
        $this->apiKey = trim(require __DIR__ . '/../config/groq.php');
        $this->model = $model;
    }

    public function chat($messages)
    {
        // array_unshift() insere o system prompt no início do array de mensagens
        array_unshift($messages, [
            'role' => 'system',
            'content' => "Você é uma IA"
        ]);
        // Inicializa uma sessão cURL para o endpoint da Groq
        $ch = curl_init($this->apiUrl);

        curl_setopt_array($ch, [
            // Retorna a resposta como string em vez de imprimir diretamente
            CURLOPT_RETURNTRANSFER => true,
            // Define o método como POST
            CURLOPT_POST => true,
            // Cabeçalhos HTTP: tipo de conteúdo e autenticação via Bearer token
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $this->apiKey
            ],
            // Corpo da requisição serializado em JSON
            CURLOPT_POSTFIELDS => json_encode([
                'model' => $this->model,
                'messages' => $messages
            ])
        ]);

        $response = curl_exec($ch);

        // curl_errno() retorna um código de erro caso a requisição tenha falhado
        if (curl_errno($ch)) {
            return null;
        }

        // Decodifica o JSON retornado pela API para array PHP
        return json_decode($response, true);
    }

    public function getContent($result)
    {
        return $result['choices'][0]['message']['content'] ?? null;
    }
}