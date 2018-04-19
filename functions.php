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

    // Entendendo as funções no php
    // Criando uma simples função
    function escrever(){
        echo "me chamou?<br>";
    }
    // Chamando a simples função
    escrever();

    // Criando uma função um pouco mais comlexa
    // neste caso passamos um parametro para ser recebido na função

    function bemvindo($nome){
        echo "Seja bem vindo $nome<br>";
    }
    // Chamando a função e passando o parâmetro
    bemvindo("lucas");

    // Pedindo e passando mais de um parâmetro para a funçao
    function conhecer($anonasc,$corfavorita){
        echo "Você nasceu em $anonasc e sua cor favorita é $corfavorita<br>";
    }
    conhecer(1989,"red");
    // é possivel atribuir valores as variaveis nas funções
    function definirNumero($num = 12){
        echo "o numero definido foi $num<br>";
    }
    // Pode se chamar a função passando algum valor
    definirNumero(129);
    // mas caso não passe nenhum parametro ele vai utilizar o valor definido 
    definirNumero();

    // Realizando operações aritimeticas dentro das funções
function somar($x,$y){
    $result = $x + $y;
    echo "A soma dos números é: $result<br>";
}
somar(2,3);
    // é possivel criar n possibilidades dentro das funções
    //  incluindo laços, tratamentos, filtros e diversas funcionalidades
    
    
    ?>
</body>
</html> 