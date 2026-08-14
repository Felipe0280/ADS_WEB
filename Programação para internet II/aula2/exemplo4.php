<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function chamarForeach ($a){
            foreach($a as $a1 ){
                echo "$a1  <br>";
            }
        }
        $numeros =[10, 11, 12, 13];
        chamarForeach($numeros);
        echo "<br>";
        array_splice($numeros, 6, 0, 14 ); //Modifica array, array_splice($array, posição, posição_apagar, valor_aicionado)
        chamarForeach($numeros); 
         echo "<br>";
        array_splice($numeros, 5, 0, 20 ); //Mesmo tentando ser alocado em uma casa "livre" o valor é adicionado a ultima casa do array
        chamarForeach($numeros); 
    ?>
</body>
</html>