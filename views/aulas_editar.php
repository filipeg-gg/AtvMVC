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
  <style>
    body {
      font-family: "Segoe UI", Arial, sans-serif;
      background-color: #f5f7fa;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      margin-top: 50px;
      color: #2c3e50;
    }

    form {
      background-color: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
      color: #34495e;
    }

    input[type="text"] {
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ccc;
      transition: border-color 0.3s;
      font-size: 14px;
    }

    input[type="text"]:focus {
      border-color: #3498db;
      outline: none;
    }

    button {
      background-color: #3498db;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #2980b9;
    }

    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #3498db;
      transition: color 0.3s;
    }

    a:hover {
      color: #21618c;
    }
  </style>
</head>
<body>
  <h1>Editar Aula</h1>

  <form action="../controllers/AulasController.php?acao=editar" method="POST">
    <input type="hidden" name="id_aula" value="<?= $aula['id_aula'] ?>">

    <label>Tipo de Aula:</label>
    <input type="text" name="tipo_aula" value="<?= $aula['tipo_aula'] ?>" required>

    <label>Professor:</label>
    <input type="text" name="professor" value="<?= $aula['professor'] ?>" required>

    <label>Aluno:</label>
    <input type="text" name="aluno" value="<?= $aula['aluno'] ?>" required>

    <button type="submit">Atualizar</button>
  </form>

  <a href="aulas_listar.php">⬅ Voltar</a>
</body>
</html>
