<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach PT 2</title>
</head>
<body>
    <?php

        $alunos = array('João', 'Maria', 'Júlia');

        echo '<pre>';
        print_r($alunos);
        echo '</pre>';           

        foreach($alunos as $idx => $nome_alunos) {
         // $idx = (variavel que vai receber o indice)
         // $nome_funcionario (variavel que vai receber o valor)
            echo "ID $idx - Nome: $nome_alunos <br />";
        }

        $funcionarios = array(
            array('nome' => 'Eduardo', 'salario' => 3800),
            array('nome' => 'Daiana', 'salario' => 4500),
            array('nome' => 'Jacqueline', 'salario' => 5300)
        );

        foreach ($funcionarios as $idx2 => $funcionario){
            foreach($funcionario as $idx3 => $valor) {
                echo "$idx3 - $valor <br />";
            }
           echo "<hr />";
        }



    ?>
</body>
</html>