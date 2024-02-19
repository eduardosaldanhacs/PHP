<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para manipular strings</title>
</head>
<body>
    <?php
        /* 
        strtolower($texto) 
        -> Transforma todos os caracteres em string minúsuclos

        strtoupper($texto) 
        -> Transforma todos os caracteres em string maisculos

        ucfirst($first) 
        -> Transforma o primeiro caracter da string em maíusculos

        strlen($texto) 
        -> Conta a quantidade de caracteres de uma string

        str_replace(<procura por>, <substitui por>, $texto) 
        -> Substitui uma cadeia de caracteres por uma outra dentro de uma string

        substr ($texto, <posicao inicial>, <qtde caracteres>) 
        -> Retorna parte de uma string 
       */
        $texto = "Curso completo de PHP";
        echo $texto . '<br />';
        echo strtolower($texto) . '<br />';
        echo strtoupper($texto) . '<br />';
        echo ucfirst($texto) . '<br />';
        echo strlen($texto) . '<br />';
        echo str_replace("PHP", "JavaScript", $texto) . '<br />';
        echo substr($texto, 5, 17) . '<br />';

    ?>
</body>
</html>