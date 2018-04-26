<?php
//Script para a criação de uma tabela no banco de dados
//Passando os parâmetros de conxão
//servidor
$servername = "localhost";
//usuario
$username = "root";
// Senha
$password = "";
// o banco de dados
$dbname = "registration";

//Tentando a criação da tabela dentro do banco de dados selecionado

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //inserindo um atributo para informar caso haja algum erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// criando o sql para realizar a criação de uma tabela dentro do banco de dados

    $sql = "CREATE TABLE Person (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "A tabela foi criada";
    }
    // fazendo o tratamento dos errros
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
