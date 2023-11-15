<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percorrendo Array</title>
</head>
<body>  
    <?php
    $registros = array(
    array('título' => 'Título notícia 1', 'conteúdo' => 'Conteudo notícia 1'), 
    array('título' => 'Título notícia 2', 'conteúdo' => 'Conteudo notícia 2'), 
    array('título' => 'Título notícia 3', 'conteúdo' => 'Conteudo notícia 3'),
    array('título' => 'Título notícia 4', 'conteúdo' => 'Conteudo notícia 4'));

    echo '<pre>';
    print_r($registros);
    echo '</pre>';
    echo '<br /><br /><br />';
    $idx = 0;

    echo 'O array possui:' . count($registros) . ' registros.';
    while($idx < count($registros)) {
    
        echo '<h3>' . $registros[$idx]['título'] . '</h3 >';
        echo '<p>' . $registros[$idx]['conteúdo'] . '</p >';
    
        echo '<hr />';

        $idx++;
    }
    ?>
</body>
</html>