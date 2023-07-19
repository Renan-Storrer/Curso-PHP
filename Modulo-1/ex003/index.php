<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos Primitivos</title>
</head>
<body>
  <h1>Teste de tipos primitivos</h1>
  <?php 
    // 0x = exadecimal
    // 0b = binário
    // 0 = Ocatal

    // $number = 300;
    // echo "O valor da variável é $number";

    // $number = 0b1011;
    // echo "O valor da variável é $number";

    // var_dump mostra o valor da variante junto com seu tipo primitivo
    // $var = 3e2; // 3e2 = 3 x 10(2)
    // var_dump($var);
    // echo "O valor é $var";

    // $solteiro = true;
    // $casado = false;

    // $vet = [6, 2.5, "Maria", 3, false];
    // var_dump($vet);

    // $nome = "Renan";

    class Pessoa{
      private string $nome
    };

    $p = new Pessoa;
    var_dump($p)
  ?>
</body>
</html>