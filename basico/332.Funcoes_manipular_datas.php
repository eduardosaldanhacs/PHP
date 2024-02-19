<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para manipular datas</title>
</head>
<body>
    <?php 
    /*
        date(formato) 
        -> Recuperar a data atual

        date_default_timezone_get(timezone) 
        -> Recuperar o timezone default da aplicação

        date_default_timezone_set(timezone)
        -> Atualizar o timezone default da aplicação

        strtotime(data)
        -> Transformar datas textuais em segundos
    */
    echo date('d'); //representa o dia com números
    echo date('D'); //representa o dia com letras
    print('<br/>');
    echo date('d/m/y H:i');
    print('<br/>');
    echo date_default_timezone_get(); 
    //Mostra qual fuso horario estamos usando 
    echo date_default_timezone_set('America/Sao_Paulo'); 
    // É possivel setar o horario em tempo de execução com essa função.
    // Por padrão o PHP vem com o horario de Berlim na Alemanha, mas como eu modifiquei o horario na pasta do PHP, ele está definido com o de Brasilia agora. Não preciso mais setar toda vez que for necessário agora.
    print('<br/>');
    echo date('d/m/y H:i');
    echo '<br />';
    $data_inicial ='2018-04-24'; //Sempre que definirmos uma data, tem que ser no padrão americano
    $data_final = '2023-07-09';
    
    //Calcular quanto tempo se passou
    //timestamp = 01/01/1970
    $time_inicial = strtotime($data_inicial);
    echo $data_inicial . ' - ' . $time_inicial;
    // 01/01/1970 - 24/04/2018 = vai mostrar o valor em segundos que se passou entre as duas datas
    //OBS: No Javascript mostra em milisegundos, no PHP é em segundos.
    
    $time_final = strtotime($data_final);
    echo ("<br />");
    echo $data_final . ' - ' . $time_inicial;

    //Agora que temos os segundos iniciais e finais, conseguimos realizar calculos

    $diferenca_times = $time_final - $time_inicial;
    echo ("<br />");

    echo 'A diferença de segundos entre a data inicial e final é: ' . $diferenca_times . '.<br />';

    $segundos_existem_dia = 24 * 60 * 60;

    echo 'Um dia possui ' . $segundos_existem_dia . ' segundos. <br />';

    $qtd_dias_passaram = $diferenca_times /  $segundos_existem_dia;

    echo 'Se passaram ' . $qtd_dias_passaram . '.';
    ?>
</body>
</html>