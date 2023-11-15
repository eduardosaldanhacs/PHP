<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - Metodo pesquisa</title>
</head>
<body>
        <?php
            //in_array() - verifica se algo existe no array, caso esteja = 1, caso nao esteja = 0
            //array_search() - verifica se algo existe no array, caso exista, mostra o indice do valor procurado, caso não existe, retorna null(não é necessariamente falso)

            $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];


            echo '<pre>';
            print_r ($lista_frutas);
            echo '</pre>';
            //PESQUISA COM in_array
            ////////////////////////////////////////////
            echo in_array('Banana', $lista_frutas);
            echo '<br/>';
            $existe = in_array('Morango', $lista_frutas);

            if ($existe) {
                echo 'Sim, o valor pesquisado existe no array.';
            } else {
                echo 'Não, o valor pesquisado nao existe no array.';
            }
            echo '<hr />';


            //PESQUISA COM array_search
            /////////////////////////////////////////////////
            echo '<br />';
            array_search('Uva', $lista_frutas);
            echo array_search('Uva', $lista_frutas);
            echo '<br />';
            $existe2 = array_search('Abacate', $lista_frutas);
            if ($existe2 != null) {
                echo 'Sim, o valor pesquisado existe no array.';
            } else {
                echo 'Não, o valor pesquisado nao existe no array.';
            }


            echo '<hr />';
            //PESQUISA EM ARRAYS MULTIDIMENSIONAIS
            /////////////////////////////////////////////////
            
            $lista_coisas = [
                'frutas' => $lista_frutas,
                'pessoas' => ['Jõao', 'Maria']
            ];

            echo '<pre>';
            print_r($lista_coisas);
            echo '</pre>';

            in_array('Morango', $lista_coisas['frutas']);

        ?>
</body>
</html>