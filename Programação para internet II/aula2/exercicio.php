<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-size: 25px;
        background-color: lightblue;
    }
</style>
<body>
    <?php 
        $nome = "Felipe Wanderherz";
        $idade = 19;
        $cidade = "Gaspar = SC";

        echo "Ola meu nome é $nome, tenho $idade anos e moro em $cidade";

        echo "<hr>";

        $preco = 25.5;
        $quantidade = 3;

        echo "$preco x $quantidade = ".($preco*$quantidade);

        echo "<hr>";

        $soma = $preco + $quantidade;
        $subtracao = $preco - $quantidade;
        $multi = $preco * $quantidade;
        $divid = $preco / $quantidade;

        echo "Soma: $soma <br> Subtração: $subtracao <br> Multiplicação: $multi <br> Divisão: $divid <br>";
        echo "<hr>";

        echo "O que será que o operador % faz? 🤔 <br> 10 % 3 = " . (10%3). "<br> Ele é o operador de resto! ☝️🤓";
    ?>
</body>
</html>