<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Felipe Wanderherz!</h1>
    <p>Este paragrafo é um html comun</p>

    <?php 
        date_default_timezone_set('America/Sao_Paulo');
        echo "<p>Este paragrafo foi gerado por PHP</p>";
        echo "<p>Data e hoje é " . date("d/m/y") ."</p>";
        echo "<p>Hora que o projeto foi atualizado pelo ultima vez " . date("H:i") . "</p>";  
        echo "<h2> Gaspar - SC</h2>" ;
    ?>

</body>
</html>