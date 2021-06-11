<?php

$servername = "sql111.epizy.com";
$username = "epiz_28780994";
$password = "iu5ffU7PrheTg";
$dbname = "epiz_28780994_bancoalunos";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM alunos");
  $stmt->execute();


  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $k=>$v) {
    echo '<tr>';
    echo '<td>'.$v['Aluno'].'</td>';
    echo '<td>'.$v['ID_Aluno'].'</td>';
    echo '<td>'.$v['Disciplina'].'</td>';
    echo '<td>'.$v['N1'].'</td>';
    echo '<td>'.$v['N2'].'</td>';
    echo '</tr>';
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>