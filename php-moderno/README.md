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

O arquivo `php.ini` é o arquivo de configuração do PHP, sendo ele o responsável pela exibição de erros, permissão de codificação utilizando outras tags, como asp_tags, short_open_tags etc...
Esse arquivo é encontrado no caminho `/etc/php/8.4/apache2/php.ini` em distribuições Linux dentro dele existem diversas configurações, como:

```text
display_errors=On
;   Default Value: On
;   Development Value: On
;   Production Value: Off
```

## Variáveis e constantes

Variaveis e constantes, são endereços de memória que armazenam dados de acordo com o que está programado, porém variáveis são mutáveis ou seja, os dados podem ser alterados de acordo com o andamento do programa, já constantes, são imutáveis, o inverso da anterior.
Uma variável é declarada utilizando o  simbolo de cifrão/dólar (**$**), em seguida, o nome da variavel, já a constante não é utilizado simbolo, porém é utilizada a palavra reservada `const` e em seguida todo seu nome é escrito em Caixa alta, como mostra o código abaixo:

```php
$nome = Guilherme;
$sobrenome = Facini;

echo "Meu nome é $nome $sobrenome"

const SEXO = 'M' // Masculino
```

### Tipos primitivos

Dentro da linguagem PHP temos 3 classes de tipos pimitivos, sendo eles:

| Classes | Tipos |
| ------- | ----- |
| Escalares | string, float, int, boolean |
| Compostos | array, object |
| Especiais | null, resource, callabe, mixed |

Os tipos **Escalares** são os tipos mais básicos da linguagens, como String(char[]), Float, Int, Boolean...
Esses tipos estão presentes em todas às principais linguagens de programação e são a base das mesmas.

## Manipulando strings em PHP

Dentro de PHP variáveis do tipo string são inicializadas com palavras/textos dentro de aspas, sendo elas simples ou duplas. Porém há diferença no uso das demais.
Também chamadas de **double quoted** e **single quoted** às aspas duplas e simples atuam de forma diferente em sua utilização sendo ela na interpretação de variáveis, operadores de concatenação etc...

```php
echo("PHP \u{1F418}"); // PHP 🐘
echo('PHP \u{1F418}'); // PHP \u{1F418}
```

Às strings que utilizam **double quoted** são préviamente interpretadas, assim conseguimos ler variáveis, ler tipos diferentes de caracteres, como no exemplo acima, já às strings **single quoted** deixa tudo como texto, por não interpretar às strings.
Na utilização de constantes é necessária a utilização do operador de concatenação, pois como uma constante não é uma variável e não leva o simbolo **$** em sua declaração em uma string uma constante é lida dessa forma:

```php
const ESTADO = "SP";

echo "Moro em ESTADO"; //Moro em ESTADO
echo "Moro em " . ESTADO; //Moro em SP
```

### Sintaxe Heredoc e Nowdoc

Às strings Heredoc e Nowdoc, são utilizadas em textos com multiplas quebras de linha, tendo sua sintaxe semelhante, porém a Nowdoc é necessária que a palavra de identificação esteja dentro de **single quoted**, tendo somente seu resultado diferente:

```php
$curso = "PHP";
$ano = date('Y');

echo <<<TESTE
  Estou estudando
    $curso em $ano.
TESTE;
//Estou estudando
//  PHP em 2025

echo <<<'TESTE'
  Estou estudando
    $curso em $ano.
TESTE;
//Estou estudando
//  $curso em $ano.
```

## Obtendo dados de formulários
Formularios em HTML são forma de obter dados de usuários de forma fácil e intuitiva, com isso, utilizamos uma estrutura simples em HTML e podemos pegar os dados e trata-los em PHP, para isso, é necessários que o formulário tenha subtags, como `action`, que contem o caminho do arquivo PHP que vai tratar os dados.
A subtag `method` especificará o método HTTP que utilizará, como GET, POST  etc...
 Já os inputsdevem conter às subtags `name` e `value`, para a extração dos mesmos no PHP, tudo isso será realizado como a imagem abaixo:

 <img src="./images/Forms parte1.png" style="width:50%">

 Com o HTML criado, e direcionando os dados ao arquivo `cad.php`, realizaremos sua estruturação, onde utilizaremos variáveis superglobais para extrair os dados.

 ```php
<?php
$nome = $_GET['nome'] ?? "Sem nome";
$sobrenome = $_GET['sobrenome'] ?? "Desconhecido";

echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é meu site!";
?>
 ```
