<?php

$nome_aluno = $_POST['nome'];
$disc = $_POST['disciplina'];
$nota1 = $_POST['N1'];
$nota2 = $_POST['N2'];

$servername = "sql111.epizy.com";
$username = "epiz_28780994";
$password = "iu5ffU7PrheTg";
$dbname = "epiz_28780994_bancoalunos";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO alunos(Aluno, Disciplina, N1, N2)
  VALUES ('$nome_aluno', '$disc', '$nota1', '$nota2')";

  $conn->exec($sql);
  echo("Cadastro Finalizado");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>