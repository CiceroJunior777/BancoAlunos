<?php

$nome_aluno = $_POST['nome'];
$disc = $_POST['disciplina'];
$nota1 = $_POST['N1'];
$nota2 = $_POST['N2'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancoalunos";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO alunos(Aluno, Disciplina, N1, N2)
  VALUES ('$nome_aluno', '$disc', '$nota1', '$nota2')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo("Cadastro Finalizado");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>