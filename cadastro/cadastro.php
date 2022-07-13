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
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $stmt -> execute();
    header("location: ../login/login.html");
}
catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}
$conn = null;
