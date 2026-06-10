# Arquitetura Alvo: MVC

Baseado nos conhecimentos adquiridos em Programação III e em pesquisas na internet, o objetivo é utilizar o padrão MVC.

## MVC

### Model

Responsável pelos dados da aplicação.

### View

Responsável pela interface apresentada ao usuário.

### Controller

Responsável pela interação entre o usuário, as Views e os Models.

---

## Estruturas Complementares

Além do MVC, a aplicação também possui outras estruturas de apoio.

### Service

Responsável pelas regras de negócio. Atua entre Model e Controller.

### Core

Núcleo do sistema. Contém classes críticas para o funcionamento da aplicação.

### Routes

Responsável pelo sistema de rotas, permitindo que a aplicação funcione em URLs como:

```text
/user
/user/IDDOUSUARIO
```

### ViewModels

Utilizadas em casos mais complexos de ligação entre múltiplos Models em uma View, facilitando a organização dos dados.

### Config

Responsável pelos arquivos de configuração e pela obtenção de dados provenientes de variáveis de ambiente (`.env`).

---

## Views

As Views estão localizadas em:

```text
/view
```

O usuário acessa a aplicação através de:

```text
/public/index.php
```

A partir desse ponto, o Router localiza a rota correspondente, busca a View necessária e retorna a resposta adequada.

---

## Estrutura Pública

### public/css

Contém as estilizações da aplicação, organizadas em módulos importados pelo arquivo principal `style.css`.

### public/fonts

Contém as fontes utilizadas pelo projeto.

### public/images

Contém algumas imagens utilizadas quando necessário.

Em uma versão final, esses arquivos estarão armazenados na nuvem, mas serão mantidos na documentação.

### public/js

Contém os arquivos JavaScript das páginas.

### public/users

Contém as imagens dos usuários.

Em uma versão final, esses arquivos estarão armazenados na nuvem, mas serão mantidos na documentação.
