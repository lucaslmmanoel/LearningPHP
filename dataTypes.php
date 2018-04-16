<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datatypes</title>
</head>
<body>

    <!-- Tipos de Dados utilizando o PHP -->
<?php 
// String Type
$string = "string";
echo $string;

// Integer Type

$integer = 5986;
echo $integer;

// Float

$float = 10.86;
echo $float;

// boolean

$true = true;
$false = false;
echo $true;
echo $false;

// Array
$array = array('primeiro' ,'segundo','terceiro' );
var_dump($array);

// Criando uma classe para um objeto
class Objeto{
    function objeto(){
        $this->model='modelo';
    }
}

// Criando um objeto da classe Objeto
$objeto = new Objeto();
echo $objeto->model;


//valores Nulos
$nulo = null;
var_dump($nulo);
 
?>


</body>
</html>