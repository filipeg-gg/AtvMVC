<?php
require_once '../controllers/AulasController.php';
require_once '../models/Aulas.php';
require_once '../config/database.php';

$id_aula = $_GET['id'];

$model = new Aula($conn);
$aula = $model->getById($id_aula);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Aula</title>
</head>
<body>
  <h1> Editar Aula</h1>

  <form action="../controllers/AulasController.php?acao=editar" method="POST">
    <input type="hidden" name="id_aula" value="<?= $aula['id_aula'] ?>">

    <label>Tipo de Aula:</label><br>
    <input type="text" name="tipo_aula" value="<?= $aula['tipo_aula'] ?>" required><br><br>

    <label>Professor:</label><br>
    <input type="text" name="professor" value="<?= $aula['professor'] ?>" required><br><br>

    <label>Aluno:</label><br>
    <input type="text" name="aluno" value="<?= $aula['aluno'] ?>" required><br><br>

    <button type="submit">Atualizar</button>
  </form>

  <br>
  <a href="aulas_listar.php">⬅ Voltar</a>
</body>
</html>
