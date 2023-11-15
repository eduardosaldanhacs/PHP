<!DOCTYPE html>
<html lang="pt-b">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays</h1>

    <?php

    //sequencias(numéricos)
    $lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva', 'Abacate');
    //Outra forma:
    //$lista_frutas =['Banana', 'Maça', 'Morango', 'Uva', 'Abacate'];


    //Podemos definir os indices que quisermos
    $lista_verduras = array(
        'a' => 'Alface',
        'b' => 'Beterraba',
        'x' => 'Penino',
        'z' => 'Couver-flor',
        '2' => 'Berinjela');

    $lista_frutas[] = 'Abacaxi'; //adicionando elemento no array

    echo '<pre>'; //Essa tag deixa o conteudo do array formatado
    var_dump($lista_frutas);
    echo '</pre>';
    echo '<br /> <hr />';
    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';
    echo $lista_frutas[2];

    echo '<pre>';
    print_r($lista_verduras);
    echo '</pre>';
    echo $lista_verduras['a'];
    ?>
</body>
</html>