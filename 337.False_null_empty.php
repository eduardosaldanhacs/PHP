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
        false (true/false) - tipo variavel boolean
        null e empty - valores especiais
        
        Null é exclusivamente null
        Empty é vazio e null também
        */

        //false é considerado vazio mas não é considerado null

        $funcionario1 = null; //null
        $funcionario2 = ''; //vazio
        $funcionario3 = false;

        //valores null
        if (is_null($funcionario1)) {
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }
        echo '<br />';

        //valores null
        if (is_null($funcionario2)) {
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }
        echo '<br />';

        //valores empty
        if (empty($funcionario1)) {
            echo 'Sim, a variável é vazia';
        } else {
            echo 'Não, a variável não é vazia';
        }
        echo '<br />';

        //valores empty
        if (empty($funcionario2)) {
            echo 'Sim, a variável é vazia';
        } else {
            echo 'Não, a variável não é vazio';
        }
        echo '<br />';
    
        //valores false
        //Não é considerado null
        if (is_null($funcionario3)) {
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }
        echo '<br />';

        //valores false
        //É considerado vazio
        if (empty($funcionario3)) {
            echo 'Sim, a variável é vazia';
        } else {
            echo 'Não, a variável não é vazio';
        }
        echo '<br />';


    ?>
</body>
</html>