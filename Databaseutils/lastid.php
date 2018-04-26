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

// Relizando a conexão pegando o ultimo ID

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // inserindo o tratamento do erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Person (firstname, lastname, email)
    VALUES ('nay', 'puzzle', 'npuzzle@example.com')";
    //Executando o insert
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "Nova inserção realizada, o ultimo ID inserido foi " . $last_id;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;