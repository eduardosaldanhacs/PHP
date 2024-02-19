<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA
  $nome = "Suporte de microfone";
  $descricao = "O suporte é novo e foi fabricado na China";
  //Usamos prepared statements quando criamos uma query com placeholders em vez dos valores reais, serve para aumentar a segurança e a perfomance da requisição
  $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

  //Bind_param serve para resgatar os parametros e o execute para rodar a query
  $stmt->bind_param("ss", $nome, $descricao); // s = string, i = integer, d = double

  $stmt->execute();