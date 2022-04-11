<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php
            $dia = "Quarta";
            switch($dia) {
                case "segunda":
                    echo "hoje e segunda";
                    break;
                case "terça":
                    echo "hoje e terça";
                    break;
                case "Quarta":
                    echo "hoje e terça";
                    break;
                case "Quinta":
                    echo "hoje e Quinta";
                    break;
                case "sexta":
                    echo "hoje e sexta";
                    break;
                default:
                    echo "e final de semana!!";
                break;
            }
        ?>
    </body>
</html>