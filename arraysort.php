<?php

//funções para arrays

echo "<h3>Testando a função 'sort'</h3>";
$candys = array("lolipop","Jellybeans","Raspberrys");
//Função para sortear arrays
sort($candys);

$candyLenght = count($candys);
for ($i=0; $i < $candyLenght ; $i++) { 
    echo $candys[$i];
    echo "<br>";
}
echo "<h3>Testando a função 'sort' com numeros</h3>";
$numbers = array(3,4,5,6,7,8,9);
//Função que sorteia os arrays
sort($numbers);

$numberLenght = count($numbers);
for ($i=0; $i < $numberLenght ; $i++) { 
    echo $numbers[$i];
    echo "<br>";
}
