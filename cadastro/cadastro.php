<?php

require_once "../services/conection.php";

try{
    $stmt = $conn -> prepare("INSERT INTO usuario (nome, email, senha)
    VALUES (:nome, :email, :senha)");

    $stmt -> bindParam(':nome', $nome);
    $stmt -> bindParam(':email', $email);
    $stmt -> bindParam(':senha', $senha);

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $stmt -> execute();
    header("location: ../login/login.html");
}
catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}
$conn = null;
