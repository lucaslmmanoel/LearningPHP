<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strings</title>
</head>
<body>
<h1>Strings</h1>
<?php
// Funções e modelos de Strings

//Essa função mede o tamanho da String
echo strlen("Caracteres");
echo "<br>";

//Essa função calcula a quantidade de palavras
echo str_word_count("Primeira Segunda,");
echo "<br>";

//Essa função inverte a string
echo strrev(",Inverso");
echo "<br>";

// Essa função Procura a posição em especifico dentro de uma string partindo do zero

echo strpos("ABCDEFGHI","H");
echo "<br>";


// Essa funçao Substitui caracteres dentro da string

echo str_replace("primeiro","primeiro","primeiro segundo") ;
echo "<br>";

echo str_replace("segundo","primeiro","primeiro segundo") ;
echo "<br>";

echo str_replace("primeiro","segundo","primeiro segundo") ;
echo "<br>";

// 

?>
<p>Para mais modelos de funções para strings <a target="_blank" href="https://www.w3schools.com/php/php_ref_string.asp">Check</a></p>
</body>
</html>