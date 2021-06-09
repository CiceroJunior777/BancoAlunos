<?php

$id = $_POST['idaluno'];

$servername = "sql111.epizy.com";
$username = "epiz_28780994";
$password = "iu5ffU7PrheTg";
$dbname = "epiz_28780994_bancoalunos";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM alunos WHERE id=$id";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Aluno Deletado com Sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>