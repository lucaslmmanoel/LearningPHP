<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constantes</title>
</head>
<body>
    <h1>Constantes</h1>
    <?php
    // Aqui estamos utilizando uma função de definição

define("GREETING", "bem vindo ao Learning PHP");
    
// Imprimindo na tela a definição de boas vindas
echo GREETING;

echo "<br>";

// Podemos refazer o exemplo anterior ultilizando uma função
function Mostar(){
    echo GREETING;
}
// Imprimindo a  função na tela 

Mostar();


?>
</body>
</html>