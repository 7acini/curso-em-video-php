# php-moderno
Repositório para o Curso de PHP moderno, disponível no Curso em Vídeo

## O PHP por dentro
O código PHP tem como "padrão", e mais utilizado, é o PHP integrado a códigos HTML.
Para isso, são necessárias às tags `<?php?>`, onde o código será introduzido como o exemplo abaixo:
```php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página</title>
</head>
<body>
  <h1>Titulo</h1>
    <?php
      echo "Hello, world!"
    ?>
</body>
</html>
```
Porém nem sempre às tags foram dessa forma, o PHP já teve diversas tags, como:
| Tag de abertura | Versão suportada |
| --------------- | ---------------- |
| `<?php` | 8.3 |
| `<?=` | 8.3 |
| `<?` | 5.6 (ativa), 8.3 (com short_open_tag habilitado) |
| `<%` | 5.6 |
| `<%=` | 5.6 |
| `<script language="php">` | 5.3 |

Sendo um pré-processador de hypertexto(HTML), o PHP atua transferindo código em sua linguagem em html e expondo em seu navegador.

<img src="./images/PHP%20por%20dentro.png" style="width:50%">

## Setup php.ini

