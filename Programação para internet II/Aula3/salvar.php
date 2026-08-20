<?php
require "conexao.php";

$nome = $_POST["nome"] ?? "";
$preco = $_POST["preco"] ?? 0;
$estoque = $_POST["estoque"] ?? 0;

$sql = "INSERT INTO produtos (nome, preco, estoque)
        VALUES ('$nome', $preco, $estoque)";

$conexao->query($sql);
header("Location: novo.php");

