# Estilo Geral

Este arquivo define a base visual do projeto.

## Fontes

As fontes são carregadas localmente através de `@font-face`:

* **Cinzel** → utilizada em títulos.
* **Cormorant Garamond** → utilizada como fonte principal do texto.
* **EB Garamond** → fonte alternativa para elementos específicos.

A propriedade `font-display: swap` garante que o texto seja exibido imediatamente com uma fonte de fallback enquanto a fonte personalizada é carregada.

## Variáveis CSS

As variáveis globais são definidas em `:root`:

* `--primary` → cor de fundo principal.
* `--text` → cor padrão do texto.
* `--accent` → cor de destaque.
* `--accent-hover` → cor de destaque ao passar o mouse.
* `--surface` → cor para superfícies secundárias.
* `--font-title` → fonte dos títulos.
* `--font-body` → fonte principal do conteúdo.
* `--font-alt` → fonte alternativa.

## Reset Básico

```css
* {
    box-sizing: border-box;
}
```

Faz com que bordas e preenchimentos sejam incluídos no cálculo das dimensões dos elementos.

## Body

Define a aparência geral da página:

* Remove margens padrão.
* Aplica a fonte principal.
* Define as cores globais.
* Utiliza Flexbox para permitir um layout com rodapé fixado ao final da página quando houver pouco conteúdo.

## Títulos

Os elementos `h1`, `h2`, `h3` e `h4` utilizam a fonte definida em `--font-title`.

## Parágrafos

Os elementos `p` utilizam a fonte definida em `--font-body`.

## Links

Os links herdam a cor do elemento pai e não possuem sublinhado por padrão.
