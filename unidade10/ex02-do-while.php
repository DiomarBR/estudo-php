<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $contador = 1;
        do {
            $soteio = rand(1,60);
            echo $soteio . "<br>";
            $contador = $contador + 1;

        } while ($contador < 6);
    ?>
</body>
</html>