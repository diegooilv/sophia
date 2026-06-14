# Nginx

> <https://nginx.org/>

## O que é?

"É um software para servidor web de código aberto conhecido por seu alto desempenho e baixo uso de recursos."
> <https://www.hostinger.com/br/tutoriais/o-que-e-nginx>

## Como funciona?

"Um servidor NGINX opera em uma arquitetura escalável e assíncrona orientada por eventos (event based architecture).

Em sua essência, o NGINX emprega um processo mestre (master process) e vários processos de trabalho (worker process). O processo mestre lê e avalia os arquivos de configuração e gerencia os processos de trabalho. Enquanto isso, os processos de trabalho lidam com o processamento real das solicitações.

Ao contrário de servidores que criam um novo processo para cada solicitação, os processos de trabalho do NGINX podem receber milhares de conexões simultâneas. Isso reduz a sobrecarga e aumenta a capacidade do NGINX de gerenciar o tráfego pesado da rede.

O NGINX também pode gerenciar o tráfego de entrada e saída como um servidor proxy reverso e gateway de API, atuando como intermediário para solicitações de clientes que buscam recursos de outros servidores. Nessa função, o NGINX pode executar funções como balanceamento de carga, terminação SSL/TLS e armazenamento em cache.

O NGINX também funciona como um servidor proxy, direcionando as solicitações do cliente para o servidor back-end apropriado e gerenciando as respostas recebidas. Isso inclui aspectos como modificação do cabeçalho HTTP de solicitações e respostas para aumentar a segurança ou o desempenho.

Os usuários também podem acrescentar módulos adicionais à arquitetura do NGINX para expandir seus recursos. Sua modularidade e o manuseio eficiente das instâncias fazem do NGINX uma ferramenta avançada para várias aplicações na web, desde sites simples até arquiteturas complexas de microsserviços."
> <https://www.hostinger.com/br/tutoriais/o-que-e-nginx>

## Quando usar?

[...] Diversas situações, porém a do projeto:

### Proxy reverso para microsserviços

"Implementar o NGINX como um proxy reverso protege seus servidores de back-end de serem expostos diretamente à internet. Ele pode interceptar e inspecionar o tráfego de entrada, reduzindo a superfície de ataque e mitigando possíveis vulnerabilidades. Portanto, somente o tráfego necessário chega a cada serviço."
> <https://www.hostinger.com/br/tutoriais/o-que-e-nginx>

## NGINX vs Apache

### Comparativo geral

"Para garantir que o seu usuário tenha uma boa experiência, você precisa se certificar que seus servidores são rápidos. [...]
De modo geral, o Apache é ideal se você precisa customizar muitas conexões. Também é uma boa ideia usá-lo se você precisa de bastante documentação. Isso porque o Apache tem mais suporte da comunidade.

De outra forma, se sua VPS receber bastante tráfego, é melhor que você use o Nginx porque ele se comporta melhor nessa área.

Finalmente, é possível usar ambos no mesmo servidor. Essa prática, embora não tão frequente como se pode pensar, é destinada a diferentes sites.

Alguns requerem mais customização e usam o Apache. Outros que são acessados por mais visitantes, usam o Nginx.

A consideração final é você precisa colocar na balança o que é melhor para você e fazer a escolha certa."
> <https://www.hostinger.com/br/tutoriais/nginx-vs-apache>

### Aplicação no projeto atual

"A prática mais comum é usar o NGINX como proxy reverso na frente do Apache. Isso cria uma 'arquitetura de duas camadas' onde cada servidor faz o que sabe fazer de melhor.Como funciona a combinaçãoNGINX na frente: Ele recebe o tráfego da internet primeiro. Por ser muito rápido e leve, ele lida com milhares de conexões simultâneas.Apache no fundo: Ele atua apenas nos bastidores, processando as regras complexas da sua aplicação (como PHP ou arquivos .htaccess)."
> Gerado por IA: Gemini 3

## Referências

Para entendimento e criação dos códigos usados no projeto, foram usados como base:

- <https://docs.cloud.google.com/looker/docs/sample-nginx-configuration?hl=pt-br>
- <https://dev.to/mauricioabreu/uma-introducao-ao-nginx-1jdg> !! Principalmente
