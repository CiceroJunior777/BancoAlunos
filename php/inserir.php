<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancoalunos";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO alunos(Aluno, Disciplina, N1, N2)
  VALUES ('chico', 'Ads',10, 9.0)";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Aluno Cadastrado";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>