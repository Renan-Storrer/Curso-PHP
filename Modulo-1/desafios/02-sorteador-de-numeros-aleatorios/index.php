<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Números Aleatórios</title>
</head>
<body>
  <main>
    <h1>Trabalhando com números aleatórios</h1>
    <p>Gerando um número aleatório entre 0 e 100..</p>
    <p>O valor gerado foi 
      <?php 
        echo rand(1,100)
        ?>
    </p>
    <button onclick=refresh()>Gerar outro número</button>
  </main>
  <script src="script.js"></script>
</body>

</html>