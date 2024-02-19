<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
        ceil($numero) -> Arredonda o valor para cima
        floor($numero) -> Arredonda o valor para baixo
        round($numero) -> Arredonda o valor com base nas casas decimais
        rand() -> Gera um inteiro aleatório
        sqrt($numero) -> Retorna a raiz quadrada
    */  
    $numero = 4.9;
    $numero2 = 4.4;
    $numero3 = 4.5;
    $numero4 = 9;

        echo ceil($numero) . '<br />';
        echo floor($numero2) . '<br />';
        echo round($numero3) . '<br />';
        echo rand() . '<br />';
        //é possivel colocar parametros para o numero aleatorio, ex:
        echo rand(10, 20) . '<br />';
        echo sqrt($numero4) . '<br />';


    ?>  
</body>
</html>