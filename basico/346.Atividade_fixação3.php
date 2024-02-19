<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade fixação 3</title>
</head>
<body>
    <?php
            $array_numeros = array(
                $numero1 = rand(1, 60),
                $numero2 = rand(1, 60),
                $numero3 = rand(1, 60), 
                $numero4 = rand(1, 60),
                $numero5 = rand(1, 60),
                $numero6 = rand(1, 60)
            );
            if ($numero1 != $numero2 && $numero1 != $numero3 && $numero1 != $numero4 && $numero1 != $numero5 && $numero1 != $numero6)
            {
                if ($numero2 != $numero1 && $numero2 != $numero3 && $numero2 != $numero4 && $numero2 != $numero5 && $numero2 != $numero6)
                {
                    if ($numero3 != $numero1 && $numero3 != $numero2 && $numero3 != $numero4 && $numero3 != $numero5 && $numero3 != $numero6)
                    {
                        if ($numero4 != $numero1 && $numero4 != $numero2 && $numero4 != $numero3 && $numero4 != $numero5 && $numero4 != $numero6){                       
                            if ($numero5 != $numero1 && $numero5 != $numero2 && $numero5 != $numero3 && $numero5 != $numero4 && $numero5 != $numero6){
                                if ($numero6 != $numero1 && $numero6 != $numero2 && $numero6 != $numero3 && $numero6 != $numero4 && $numero6 != $numero5){
                                    echo '<pre>';
                                    print_r($array_numeros);
                                    echo '</pre>';
                                }
                            } //FUNCIONOU MAS FICOU HORRIVEL
                        }
                    }
                }
            }
                                
            





    

    ?>

</body>
</html>