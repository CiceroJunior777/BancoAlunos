<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<!--tabela-->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Aluno</th>
      <th scope="col">Id</th>
      <th scope="col">Disciplina</th>
      <th scope="col">Nota 01</th>
      <th scope="col">Nota 02</th>
    </tr>
  </thead>
  <tbody>
  <?php include 'php/banco.php';?> 
  </tbody>
</table>

    <!--JAVA SCRIPT-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>