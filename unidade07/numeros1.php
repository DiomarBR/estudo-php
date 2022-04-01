<?php 
    $_salario = 800;
    $_meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo $_salario * $_meses ."</br>";
            echo $_salario / 2 ."</br>";
            // Exponencial
            echo "Raiz quadrada: " . pow(6,3) . "</br>";
            echo "exponencial:" . pow(6,2). "</br>";
            // Raiz Quadrada
            echo "raiz quadrada: " .sqrt(36). "</br>";
            // Randômico Generica
            echo "Randomico: " . rand(1,5) . "</br>";
            echo "numero genericos: " . rand(). "</br>";
            // Randômico entre um intervalo
            echo "Randomico no intervalo: " . rand(5,10) . "</br>";
            // Valor absoluto
            echo "numero absoluto: " . abs(-300)
        ?>
    </body>
</html>