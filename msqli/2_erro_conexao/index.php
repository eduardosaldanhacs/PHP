<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "formulario_eduardo";

  $conn = new mysqli($host, $user, $pass, $db);

  if($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro: " . $conn->connect_errno;
    echo "Erro: " . $conn->connect_error;
  }

  echo "Teste";