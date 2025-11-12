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
</head>
<body>
  <h1>📚 Lista de Aulas</h1>
  <a href="aulas_form.php"> Nova Aula</a>
  <br><br>

  <table border="1" cellpadding="10">
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
        <td>
          <a href="aulas_editar.php?id=<?= $linha['id_aula'] ?>">Editar</a> |
          <a href="../controllers/AulasController.php?acao=excluir&id=<?= $linha['id_aula'] ?>">Excluir</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
