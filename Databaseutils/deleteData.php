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
// Realizando a conexão com o database e excluindo
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // caso haja algum erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Passando o SQL de delete
    $sql = "DELETE FROM Person WHERE id=3";
// Executando o SQL

    $conn->exec($sql);
    echo "Deletado com sucesso";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;