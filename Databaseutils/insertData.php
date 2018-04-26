<?php
//Passando os parâmetros de conxão
//servidor
$servername = "localhost";
//usuario
$username = "root";
// Senha
$password = "";
// o banco de dados
$dbname = "registration";

//Tentando realizar a inserção 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Person (firstname, lastname, email)
    VALUES ('lucas', 'manoel', 'lucas@example.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "O dado doi inserido";
    }
// Captando os  erros e fazendo o tratamento
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
