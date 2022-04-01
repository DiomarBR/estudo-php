<?php
    $salario = 1095;
    $gasolina = 4.55;
    $telefone = "99681-4937";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O $salario E um numero ?" . is_numeric($salario)."</br>"; 
            echo "O $gasolina E um numero ?" . is_numeric($gasolina). "</br>"; 
            echo "O $telefone E um numero ?" . is_numeric($telefone)."</br>";
            // testar se é inteiro
            echo "O $salario E um inteiro?" . is_int($salario)."</br>"; 
            echo "O $gasolina E um inteiro?" . is_int($gasolina)."</br>"; 
            echo "O $telefone E um inteiro?" . is_int($telefone)."</br>";
            // testar se é float
            echo "O $salario E um flotoante?" . is_float($salario)."</br>"; 
            echo "O $gasolina E um flotoante?" . is_float($gasolina)."</br>"; 
            echo "O $telefone E um flotoante?" . is_float($telefone)."</br>"
        ?>
        
        
    </body>
</html>