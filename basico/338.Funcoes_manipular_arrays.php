<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes para manipular arrays</title>
</head>
<body>
    <?php   
        /*
        is_array(array) 
        -> Verifica se o parâmetro é um array

        arrays_keys 
        -> Retorna todas as chaves de um array

        sort(array) 
        -> Ordena um array e reajusta seus indices

        asort(array) 
        -> Ordena um array preservando os índices

        count(array) 
        -> Conta a quantidade de elementos de um array

        array_merge(array) 
        -> Funde um ou mais arrays

        explode(array) 
        -> Divide uma string baseada em um delimitador

        implode(array) 
        -> Junta elementos de um array em uma string
        */

        $array = [1 => 'a', 7 => 'b', 18 => 'c'];
        echo '<pre>';
        print_r($array);
        echo '<pre/>';
        echo 'FUNÇÃO ARRAY KEYS';
        //ARRAY KEYS//
        //vai retornar um array com o valor dos indices do array que foi encaminhado na função.
        $chaves_array = array_keys($array);
        echo '<pre>';
        print_r($chaves_array);
        echo '<pre/>';

        echo '<hr/>';

        /////////////////////////////////////////////////
        //sort
        $array_itens = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];
        echo '<pre>';
        print_r($array_itens);
        echo '</pre>';

        echo 'FUNÇÃO SORT';
        sort($array_itens); //true ou false
        echo '<pre>';
        print_r($array_itens); //array orndenado alfabeticamente, modificando os indices
        echo '</pre>';

        echo '<hr/>';

        ////////////////////////////////////////////////
        //asort
        $array_itens = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];
        echo '<pre>';
        print_r($array_itens);
        echo '</pre>';

        echo 'FUNÇÃO ASORT';
        asort($array_itens); //true ou false
        echo '<pre>';
        print_r($array_itens); //array orndenado alfabeticamente, preservando os indices
        echo '</pre>';

        echo '<hr/>';

        ///////////////////////////////////////////////
        //count
        echo 'FUNÇÃO COUNT';
        $array_itens = ['teclado', 'mouse', 'cabo hdmi','gabinete', 'fonte atx', 'notebook'];
        echo '<pre>';
            print_r($array_itens);
            echo count($array_itens); //Quantos elementos possui no array
        echo '</pre>';
        echo '<hr />';
        ///////////////////////////////////////////////
        ///array_merge
        echo 'FUNÇÃO ARRAY MERGE';
        $array1 = ['osx', 'windows'];
        $array2 = array('linux');
        $array3 = ['solaris'];

        $novo_array = array_merge($array1, $array2);
        echo '<pre>';
            print_r($novo_array);
        echo '</pre>';

        /////////////////////////////////////////////
        //explode
        //delimitadores: - # / 
        echo 'FUNÇÃO EXPLODE';

        $string ='10/07/2023';
        echo '<br />';
        $array_retorno = explode('/', $string);
        echo '<pre>';
            echo $string;
            print_r($array_retorno);
            echo $array_retorno[2]. '-'.$array_retorno[1].'-'.$array_retorno[0];
        echo '</pre>';
        
        ////////////////////////////////////////////
        //implode
        //adicionamos demilitadores em cada elemento do array
        $array = ['a', 'b', 'x', 'y'];
        $string_retorno = implode('-', $array);
        echo $string_retorno;

    ?>


</body>
</html>