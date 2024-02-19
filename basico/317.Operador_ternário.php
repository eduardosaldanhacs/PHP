<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $maiorQ10 = true;
    //OBS: Melhor usar if ou else
        //Duas formas de imprimir:
            // No PHP ou no HTML
    //NO PHP
    $teste = $maiorQ10? 'Sim' : 'Não';
    echo "É maior que 10? $teste";

    ?>                  <!-- <condição> ? true : false -->
    <p><!--NO HTML -->
        É maior que 10? <?= $maiorQ10? 'Sim' : 'Não'; ?>
    </p>




</body>
</html>