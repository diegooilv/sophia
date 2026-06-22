# Cloudflare Tunnel

Este projeto usa Cloudflare Tunnel para expor o servidor local para testes externos.

## Instalação

Windows (Winget):

```bash
winget install Cloudflare.cloudflared
```

Ou download manual:
[https://developers.cloudflare.com/cloudflare-one/connections/connect-networks/downloads/](https://developers.cloudflare.com/cloudflare-one/connections/connect-networks/downloads/)

---

## Iniciar o tunnel

Execute o servidor local primeiro:

[Docker ...]

---

Tunnel:

```bash
cloudflared tunnel --url http://localhost:8080
```

---

## Exemplo

```url
https://xxxx.trycloudflare.com
```
