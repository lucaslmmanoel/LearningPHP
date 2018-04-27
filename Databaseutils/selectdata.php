<?php
//Abrindo a tag da tabela onde será exibido os dados
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";
//Criando um classe para receber o tratamento da tabela
class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:250px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 


//Passando os parâmetros de conxão
//servidor
$servername = "localhost";
//usuario
$username = "root";
// Senha
$password = "";
// o banco de dados
$dbname = "registration";
// Tentando realizar a conexão e fazer o select no banco de dados
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Caso haja algum erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //Passando o SQL de select
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM Person"); 
    $stmt->execute();

    // captando o resultado e inserindo em uma vaariavel
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    // inserindo as tuplas na tabela que iremos exibir
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
// Tratando os erros
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
//Fechando a tabela
echo "</table>";
?>

