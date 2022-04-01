<?php 
    $_nome = "Diomar gonçalves";
    $_salario = 1200;
    $_pagamentos = 800;
    $_total = 1200-800;
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php echo $_nome;
        echo $_salario;?>
        <p><?php
                echo $_salario;
                echo $_pagamentos;
                echo $_total;
           ?>
        </p>
    </body>
</html>