<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Nova Aula</title>
</head>
<body>
  <h1> Cadastrar Nova Aula</h1>

  <form action="../controllers/AulasController.php?acao=criar" method="POST">
    <label>Tipo de Aula:</label><br>
    <input type="text" name="tipo_aula" required><br><br>

    <label>Professor:</label><br>
    <input type="text" name="professor" required><br><br>

    <label>Aluno:</label><br>
    <input type="text" name="aluno" required><br><br>

    <button type="submit">Salvar</button>
  </form>

  <br>
  <a href="aulas_listar.php">⬅ Voltar</a>
</body>
</html>
