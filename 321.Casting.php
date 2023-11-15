<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //gettype() => retorna o tipo da variável
        $valor = 15.35;

        //$valor2 = (string)$valor;
        $valor2 = (int) $valor;

        echo $valor. ' ' . gettype($valor);
        echo '<br />';
        echo $valor2. ' ' . gettype($valor2);
        //No PHP o tipo float e double  são iguais
    ?>

</body>
</html>