<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        /*  Variaveis devem ser declaradas com o caracter "$"
            Não pode conter espaços ou caracter especiais
            Não é preciso definir se a variavel é string, int, float, boolean ou array
            PHP é uma linguaguem case sensitive, ou seja: $nome != $Nome != $NOME
        */  
        //Exemplo de variaveis validas:
        $nome = "Eduardo Saldanha";
        $fone1 = 998695019;
        $endereco_2 = "Partenon";
        //Exemplo de variaveis inválidas:
        //$ nome $1fone $número

        //string
        $nome = "Eduardo Saldanha";
        //int
        $idade = 22;
        //float
        $peso = 84.6;
        //boolean
        $fumante_sn = TRUE;
        if ($fumante_sn = TRUE) {
            $fumante_sn = "Sim";
        }
        
        
     ?>
        <h1>Ficha Cadastral</h1>
        <br/>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fumante_sn ?></p>
</body>
</html>