<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resultado</title>
</head>
<body>
  <main>
    <h1>Conversor de Moedas v1.0</h1>
    <p>
      <?php 
        $value = number_format($_GET["value"], 2, ",",".");
        $dolar = 4.75;
        $result = number_format($value / $dolar, 2, ",",".");
        echo "Seus R$ $value equivalem a U$ $result<br>";
        echo "<br>Cotação fixa de R$ 4.75, informado diretamente no código."
      ?>
    </p>
  </main>
</body>
</html>