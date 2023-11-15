<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php       
        $valor1 = 1;
        $valor2 = 2;
        $soma = 0;
        $subtrai = 0;
        $multiplica = 0;

        if ($valor1 < $valor2) {
            $soma = $valor1 + $valor2;
        } else if($valor2 > $valor1) {
            $subtrai = $valor1 - $valor2;
        } else {
            $multiplica = $valor1 * $valor2;
        }

        echo "Soma: $soma <br /> Subtrai: $subtrai <br /> Multiplicação: $multiplica <br />";
    ?>



</body>
</html>