<?php
//Passando os parâmetros de conexão com o banco para variaveis
//Aqui definimos o local do servidor
$servername = "localhost";
//o usuario 
$username = "root";
// a senha
$password = "";
// Relizando a contrução da conexão
try {
   //Passando os parâmetros para uma variavel de conexão juntamente com o nome do banco que queremos usar
    $conn = new PDO("mysql:host=$servername;dbname=registration", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Informando se a conexão foi elaborada
    echo "Connected successfully"; 
    }
    //Captando os erros
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    //Realizando um insert no banco
    // criando a condição para o recebimento das variaveis
    if(isset($_POST['signup'])){
      $name = $_POST['name'];
      $password = $_POST['password'];
      $email = $_POST['email'];
        //Passando  a query de isnerção no banco de dados
        $query = "INSERT INTO users (name,password,email) values ('$name','$password','$email')";
        //Informando a conexão para realizar a inserção da query
        $conn->exec($query);        
}