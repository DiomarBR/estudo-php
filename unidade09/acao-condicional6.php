<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $idade = 18;
            $sexo = "feminino";
            if($idade >= 18 && $sexo == "feminino"){
                echo "Pode entrar na festa.";
            } else {
                echo "nao pode entrar na festa.";
            }
        ?>
    </body>
</html>