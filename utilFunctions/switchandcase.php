<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    // Entendendo o switch
    $corfavorita = "white";

    switch($corfavorita){
    //    os cases são responsáveis pelas condicões 
        case "green":
            echo "Sua cor favorita é green";
            break;
        case "blue":
            echo "Sua cor favorita é Blue";
            break;
        case "red":
            echo "Sua cor favorita é red";
            break;
    //A expressão default é acionada caso nenhuma dos cases for acionado 
        default:
            echo "A sua cor favorita não é verde nem vermelha e muito menos azul";
    }
    
    ?>
</body>
</html>