<?php
require_once '../controllers/AulasController.php';
$controller = new AulaController();
$resultado = $controller->listarAulas();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Lista de Aulas</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f3f4f6;
      margin: 0;
      padding: 0;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-top: 30px;
    }

    .container {
      width: 90%;
      max-width: 900px;
      margin: 40px auto;
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    a {
      text-decoration: none;
      color: white;
      background-color: #2563eb;
      padding: 8px 14px;
      border-radius: 6px;
      font-size: 14px;
      transition: background 0.2s ease-in-out;
    }

    a:hover {
      background-color: #1d4ed8;
    }

    .novo {
      display: inline-block;
      margin-bottom: 20px;
      background-color: #10b981;
    }

    .novo:hover {
      background-color: #059669;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
    }

    th {
      background-color: #2563eb;
      color: white;
      padding: 12px;
    }

    td {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }

    tr:hover {
      background-color: #f1f5f9;
    }

    .acoes a {
      margin-right: 8px;
      padding: 6px 10px;
      border-radius: 5px;
      font-size: 13px;
    }

    .editar {
      background-color: #f59e0b;
    }

    .editar:hover {
      background-color: #d97706;
    }

    .excluir {
      background-color: #ef4444;
    }

    .excluir:hover {
      background-color: #dc2626;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Gerenciador de Aulas</h1>
    <a href="aulas_form.php" class="novo">+ Nova Aula</a>

    <table>
      <tr>
        <th>ID</th>
        <th>Tipo de Aula</th>
        <th>Professor</th>
        <th>Aluno</th>
        <th>Ações</th>
      </tr>

      <?php while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
          <td><?= $linha['id_aula'] ?></td>
          <td><?= $linha['tipo_aula'] ?></td>
          <td><?= $linha['professor'] ?></td>
          <td><?= $linha['aluno'] ?></td>
          <td class="acoes">
            <a href="aulas_editar.php?id=<?= $linha['id_aula'] ?>" class="editar">Editar</a>
            <a href="../controllers/AulasController.php?acao=excluir&id=<?= $linha['id_aula'] ?>" class="excluir">Excluir</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  </div>
</body>
</html>
