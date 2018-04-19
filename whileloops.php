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
// Entendendo os laços de repetições no php 
// Iniciando um inteiro 

$x = 1;

echo "o numero é $x <br>";
// criando o laço while
while($x <6){
    $x++;
    echo"Agora é o numero $x <br>";
}
echo "<br>";
// Criando o laço do_while
do {
    echo "o numero final apos o laço: $x <br>";
}while($x <6);

    ?>
</body>
</html>