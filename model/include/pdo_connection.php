<?php
try {
  $host = "localhost";
  $user = "toposiciones";
  $password = "123abc.";
  $database = "toposicionesDB";
  $conn = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $password);
} catch (PDOException $pdoE) {
  echo "Fallo al conectar con MySQL: " . $pdoE->getMessage();
  exit();
}
   

