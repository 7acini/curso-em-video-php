<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <h1>Exemplo em PHP</h1>
    <?php
      date_default_timezone_set('America/Sao_Paulo'); //GMT-3
      echo "<p>Hoje é " . date('d/m/Y') . "</p>";
      echo "<p>Agora são " . date('H:i:s T') . "</p>";
    ?>
</body>
</html>