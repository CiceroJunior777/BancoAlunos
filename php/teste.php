<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancoalunos"

try {
  $conn = new PDO("mysql:host=$servername;db=$dbname; charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão Sucesso";
} catch(PDOException $e) {
  echo "Conexão Sem Sucesso: " . $e->getMessage();
}
?>