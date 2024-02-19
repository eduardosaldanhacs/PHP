<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA
  //Executando uma query
  $sql = "SELECT * FROM itens";

  $result = $conn->query($sql);

  //Recebemos um objeto como resultado
  print_r($result);
  //3 colunas e 6 linhas

  $conn->close();//Precisamos sempre fechar a conexao com o banco de dados