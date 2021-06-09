<?php
$servername = "sql111.epizy.com";
$username = "epiz_28780994";
$password = "iu5ffU7PrheTg";
$dbname = "epiz_28780994_bancoalunos";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão Sucesso";
} catch(PDOException $e) {
  echo "Conexão Sem Sucesso: " . $e->getMessage();
}
?>