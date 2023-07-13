<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    /*Existe essas duas formas de impressão no PHP */
        echo "Comando echo<br />";

        print "Comando print <hr />";
    /*Antigamente o print era uma função, utilizada entre parenteses */
    /*Como toda função gera um retorno, podemos demonstrar utilizando o print como função */
        echo print("Olá, mundo! <hr/>");
    /*O print imprimiu o "Olá, mundo" e o echo imprimiu o retorno da função print, como a função deu certo, retornou 1, se tivesse errada, retornava 0
    
    Como o print faz a impressao e depois retorna um valor, ele acaba sendo mais lento que o echo para imprimir coisas
    */

    ?>
</body>
</html>