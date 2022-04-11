<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            print_r($_salada)
        echo"existe o elemento?" . in_array("Uva", $_salada);
        ?>
    </body>
</html>