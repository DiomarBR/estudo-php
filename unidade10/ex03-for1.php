<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        for ($contador= 1 ; $contador <= 7 ; $contador ++ ) { 
            $sorteio = rand(1,60);
            echo $sorteio . " ";
        }
    ?>
</body>
</html>