<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Você pode doar sangue?</h1>
    <?php
        $idade = 69;
        $peso = 51;
        if ($idade >= 16 && $idade <= 69 && $peso > 50) {
            echo "Atende aos requisitos";
        } else {
            echo "Não atende aos requisitos";
        }   
    ?>





</body>
    
</html>