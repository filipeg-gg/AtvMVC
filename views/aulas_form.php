<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Nova Aula</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f3f4f6;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 90%;
      max-width: 500px;
      margin: 60px auto;
      background: #fff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 25px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 6px;
      color: #444;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-bottom: 18px;
      transition: border-color 0.2s;
    }

    input[type="text"]:focus {
      outline: none;
      border-color: #2563eb;
      box-shadow: 0 0 4px rgba(37, 99, 235, 0.3);
    }

    button {
      width: 100%;
      background-color: #10b981;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.2s ease-in-out;
    }

    button:hover {
      background-color: #059669;
    }

    a {
      display: block;
      text-align: center;
      margin-top: 20px;
      text-decoration: none;
      color: #2563eb;
      font-weight: bold;
      transition: color 0.2s;
    }

    a:hover {
      color: #1d4ed8;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Cadastrar Nova Aula</h1>

    <form action="../controllers/AulasController.php?acao=criar" method="POST">
      <label for="tipo_aula">Tipo de Aula:</label>
      <input type="text" name="tipo_aula" id="tipo_aula" required>

      <label for="professor">Professor:</label>
      <input type="text" name="professor" id="professor" required>

      <label for="aluno">Aluno:</label>
      <input type="text" name="aluno" id="aluno" required>

      <button type="submit">Salvar</button>
    </form>

    <a href="aulas_listar.php">⬅ Voltar</a>
  </div>
</body>
</html>
