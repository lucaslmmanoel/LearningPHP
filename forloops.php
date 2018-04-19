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
// entendendo como funcionam os laços for no php
// Assim como todo laço for ele precisa de um inicio uma condição e um incremento
// Este é um exemplo de um simples for

for ($i=0; $i<10 ; $i++) { 
echo "o numero é: $i<br>";
}

echo "<br>";

// Este é um exemplo de for each, que é usado quando queremos trabalhar com arrays
// criando um array
$cores = array("vermelho","amarelo","verde");

foreach ($cores as $cor) {
echo "$cor <br>";
}
    ?>
</body>
</html>