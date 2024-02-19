<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $salario = 5000;
        $aliquota = 0;
        if ($salario <= 1903.98) {
            $aliquota = "Isento";
        } else if ($salario >= 1903.99 && $salario <= 2826.65){
            $aliquota = "7.5%";
        } else if ($salario >= 2826.66 && $salario <= 3751.05){
            $aliquota = "15%";
        } else if ($salario >= 3751.06 && $salario <= 4664.68){
            $aliquota = "22.5%";
        } else if ($salario > 4664.68){
            $aliquota = "27.5%";
        } 
        echo 'O seu salário é: ' . $salario. ".";
        echo '<br />';
        echo 'O seu imposto de renda é: ' . $aliquota; 
    ?>
        
</body>
</html>