<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array_numeros = [];

            while(count($array_numeros) < 6) {
                $numero = rand(1, 60);
                    if (!in_array($numero, $array_numeros)){
                        $array_numeros[] = $numero;
                    }
            }
            echo '<pre>';
            print_r($array_numeros);
            echo '</pre>';


    ?>
</body>
</html>