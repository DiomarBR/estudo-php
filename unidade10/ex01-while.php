<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $contador = 1;
        while ($contador < 5) {
            $sorteio = rand(1,10);
            echo $sorteio . " ";
            $contador = $contador + 1;

        }
    ?>
</body>
</html>