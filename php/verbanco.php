<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Aluno</th><th>ID_Aluno</th><th>Disciplina</th><th>N1</th><th>N2</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "sql111.epizy.com";
$username = "epiz_28780994";
$password = "iu5ffU7PrheTg";
$dbname = "epiz_28780994_bancoalunos";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT Aluno, ID_Aluno, Disciplina, N1, N2 FROM alunos");
  $stmt->execute();


  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>