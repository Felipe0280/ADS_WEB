<?php
require "conexao.php";

$busca = $_GET["busca"] ?? "";
$sql = "SELECT id, nome, preco FROM produtos
        WHERE nome LIKE '%$busca%'";
$resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table.*{
            border: 1px black;
        }
    </style>
    <form method="get">
        <input name="busca" value="<?= htmlspecialchars($busca) ?>">
        <button type="submit">Buscar</button>
    </form>

    <table>
        <tr><th>ID</th><th>Produto</th><th>Preço</th></tr>

        <?php while ($produto = $resultado->fetch_assoc()): ?>
            <tr>
            <td><?= $produto["id"] ?></td>
            <td><?= htmlspecialchars($produto["nome"]) ?></td>
            <td>R$ <?= number_format($produto["preco"], 2, ",", ".") ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>