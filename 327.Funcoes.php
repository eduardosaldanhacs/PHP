<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php
    function exibirBoasVindas() {
        echo 'Bem vindos ao curso de PHP <br />';
    }
    //tipo void
    exibirBoasVindas();


    //tipo return
    function calcularAreaTerreno($largura, $comprimento) {
        $area = $largura * $comprimento;
        return $area;
    }
        echo calcularAreaTerreno(50, 30);
        echo "<br />";
        $resultado = calcularAreaTerreno(50, 30);
        echo $resultado;


    /*Existem dois tipos de funções:
    VOID = A chamada apenas processa uma lógica
    RETURN = Alem de processar uma lógica, irá retornar um valor para o script que solicitou

    */
        



    ?>
</body>
</html>