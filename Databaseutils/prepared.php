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

// tentando realizar a inserção de multiplos dados

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Criando o SQL para o insert e passando os parâmetros para receber os dados
    $stmt = $conn->prepare("INSERT INTO Person (firstname, lastname, email) 
    VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    //insertando a primeira linha
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    // inserindo a segunda linha
    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    // inserindo outra linha
    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $stmt->execute();

    echo "os dados foram inseridos";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
