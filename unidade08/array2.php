<?php
    $megasena = array(01,10,19,34,35,45);
    sort($megasena);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo max($megasena)."</br>";
            echo min($megasena)."</br>";
        ?>
        <pre>
        <?php 
            print_r($megasena);
        ?>
        </pre>
    </body>
</html>