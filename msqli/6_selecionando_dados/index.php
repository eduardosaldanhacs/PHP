<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA
  $q = "SELECT * FROM itens";

  $result = $conn->query($q);

  $conn->close();

  // UM RESULTADO
  //fetch_assoc recupera uma linha de resultados de uma consulta
  $item = $result->fetch_assoc();

  // TODOS OS RESULTADOS
  //fetch_all recupera todas as linhas de resultados 
  $itens = $result->fetch_all();

  print_r($itens);