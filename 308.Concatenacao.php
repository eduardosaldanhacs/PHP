<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php

        $nome = "Eduardo";
        $cor = "Azul";
        $idade = 22;
        $esporte = "Skate";

        //operador .
        //forma mais dificil, mas é mais rapida a impressao
        echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e que gosta de ' . $esporte . '.';
        

        echo "<br />";

        //forma mais fácil, mas é mais lento a impressao
        echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui, $idade anos e que gosta de $esporte.";
        //Só funciona com aspas dupla, nessa forma de impressao, como é feito a leitura de valores nas variaveis, nesse metodo é mais lento que usando o operador ponto
     ?>
</body>
</html>