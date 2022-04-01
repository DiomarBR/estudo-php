<?php
    $salada = array("maçã", "Abacaxi", "Laranja");
    $carrinho = array(100, "Diomar", array(1,"Bolsa", 87,90))
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php
            echo $salada[0]. "</br>";
            echo $salada[1]. "</br>";
            echo $salada[2]. "</br>";
            $salada[] = "abacate";
            $salada[] = "morango";
            echo $salada[3]. "</br>";

            echo count($salada). "</br>";
        ?>
        <pre>
        <?php
            print_r($salada)
        ?>
        </pre>
    </body>
</html>