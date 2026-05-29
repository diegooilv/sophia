<?php

class Router
{
    private array $rotas = [];

    public function addRota($method, $path, $callback): void
    {
        $this->rotas[$method][$path] = $callback;
    }

    public function get($path, $callback): void
    {
        $this->addRota('GET', $path, $callback);
    }

    public function post($path, $callback): void
    {
        $this->addRota('POST', $path, $callback);
    }

    private function execute(array $callback, array $params = []): void
    {
        [$class, $action] = $callback;

        // Verifica se a classe e o método existem antes de executar a rota
        if (
            class_exists($class) &&
            method_exists($class, $action)
        ) {
            call_user_func([new $class(), $action], ...$params);
            return;
        }

        http_response_code(500);
        exit('Rota configurada incorretamente.');
    }
    public function run(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $uri = '/' . trim($uri, '/');

        if (isset($this->rotas[$method][$uri])) {
            $this->execute($this->rotas[$method][$uri]);
            return;
        }

        foreach ($this->rotas[$method] ?? [] as $path => $callback) {
            // Converte parâmetros da rota {param} em regex para capturar valores
            $pattern = preg_replace('/\{[^}]+\}/', '([^/]+)', $path);

            if (preg_match('#^' . $pattern . '$#', $uri, $matches)) {
                array_shift($matches);

                $this->execute($callback, $matches);
                return;
            }
        }

        http_response_code(404);
        include __DIR__ . '/../views/404.php';
    }
}