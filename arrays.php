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
    // Entendendo os arrays com php
 
    //  Este é um exemplo de array
    $carros = array("Audi","BMW","Ferrari");

    // As chaves com o número indicam a posição da string no array
    
    echo "As marcas de carro que mais gosto são $carros[0], $carros[1] e $carros[2]! <br> ";
    
    // essa função conta quantas strings possum  o array no nosso caso quantos carros
    echo "Existem ".count($carros)." Marcas no exemplo";
    echo "<br>";

// Trabalhando com arrays e loops 

// Variavel para receber a quantidade de carros
$quantidadecarros = count($carros);
// Criando um laço para exibir as marcas dos carros
for ($i=0; $i < $quantidadecarros ; $i++) { 
    echo $carros[$i];
    echo "<br>";
}

// Associação nos arrays 
// Utilizada quando queremos associar algo ao elemento dentro do array

$idade = array("lucas" =>"18","joao" =>"19","maria" =>"21");
echo"Lucas tem". $idade['lucas']. " anos de idade" ;
    ?>
</body>
</html>