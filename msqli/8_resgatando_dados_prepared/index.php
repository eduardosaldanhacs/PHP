<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA
  $id = 4;

  $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");
  //O parametro escondido é um inteiro da variavel $id, ou seja id > 4
  $stmt->bind_param("i", $id);

  $stmt->execute();
  //Pegar o resultado
  $result = $stmt->get_result();
  //Recebe todo o array
  $data = $result->fetch_all();

  print_r($data);