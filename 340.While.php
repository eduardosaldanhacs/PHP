<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <?php
    echo '--ÍNICIO DO LOOP--<br />';
    $num = 1;
    while ($num< 10){
        //num vale 1
        $num++; //num vale 2 = 1+1
        if($num == 2 || $num == 6){
            continue; //pula o 2 e o 6
        //Pula para o proximo laço
        }
        if ($num == 9) {//interrompe o laço no 9
            break;
        }//Interrompe o laço de repetição

        echo '$num <br/>';
        // vai impresso o 3,4,5,7,8
    }



    ?>
</body>
</html>