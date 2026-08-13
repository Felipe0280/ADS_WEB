<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $nome = 'Larissa';
    $idade = 20;
    $nota = 10.5;
    $aprovada = true;

    echo "Nome: $nome<br>";
    echo "Idade: $idade<br>";
    echo "Nota: $nota<br>";

    echo "Nome é ".gettype($nome) . "<br>";
    echo "idade é ".gettype($idade) . "<br>";
    echo "nota é ".gettype($nota) . "<br>";
    echo "aprovada é ".gettype($aprovada) . "<br>";

?>
</body>
</html>