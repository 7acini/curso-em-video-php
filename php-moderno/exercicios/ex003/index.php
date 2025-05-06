<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos em PHP</title>
</head>
<body>
  <h1>Teste de tipos primitivos</h1>
    <?php
      // 0x = hexadecimal 0b = Binário 0 = Octal
      $num = 300; //int

      print_r("$num\n");
      var_dump($num);

      $vet = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
      var_dump($vet);

      class Objeto{
          private string $nome;
      }

      $obj = new Objeto;
      var_dump($obj);

    ?>
</body>
</html>