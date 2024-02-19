<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista_coisas = [];

        $lista_coisas['frutas'] = array(1 => 'Banana', 2 => 'Maça', 3 => 'Morango', 4 => 'Banana');
        $lista_coisas['pessoas'] = [1 => 'João', 2 => 'Maria', 3 => 'José'];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo '<hr />';
        echo $lista_coisas['frutas'][3];
        echo '<br />';
        echo $lista_coisas['pessoas'][3];
    ?>  
</body>
</html>