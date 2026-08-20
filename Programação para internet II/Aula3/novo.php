<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Novo produto</h1>

  <form method="post" action="salvar.php" onsubmit="return confirm('Salvo com suceso')">
    <label>Nome <input name="nome" required></label><br>
    <label>Preço <input name="preco" type="number" step="0.01" required></label><br>
    <label>Estoque <input name="estoque" type="number" required></label><br>
    <button type="submit">Cadastrar</button>
  </form>
</body>
</html>