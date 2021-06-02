<?php
$servername = "sql111.epizy.com";
$username = "epiz_28780994";
$password = "iu5ffU7PrheTg";

try {
  $conn = new PDO("mysql:host=$servername;dbname=teste; charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão Sucesso";
} catch(PDOException $e) {
  echo "Conexão Sem Sucesso: " . $e->getMessage();
}
?>