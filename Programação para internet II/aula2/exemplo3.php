<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nota = 1.0;
        $faltas = 20;

        if($nota >= 6 && $faltas < 15){
            echo "Aprovado!!";
        }else{
            echo "Reprovado!!";
        }

        echo "<br> For até 20: <br>";
        for($i = 1; $i <= 20; $i ++){
            echo "$i <br>";
        }
        
        $reprovado = true;
        while($reprovado){
          $nota += 2;
          $faltas -= 2;
          if($nota >= 6 && $faltas < 15){
            $reprovado = false;
        }  
        }
        echo "<br> Aprovado!!";
    ?>
</body>
</html>