<?php

require_once "../services/conection.php";
include '../services/protecao.php';

try{
    $stmt = $conn -> prepare("INSERT INTO contato (nome, email, telefone, cep, rua, bairro, estado, cidade, fk_usuario)
    VALUES (:nome, :email, :telefone, :cep, :rua, :bairro, :estado, :cidade, :fk_usuario)");

    $stmt -> bindParam(':nome', $nome);
    $stmt -> bindParam(':email', $email);
    $stmt -> bindParam(':telefone', $telefone);
    $stmt -> bindParam(':cep', $cep);
    $stmt -> bindParam(':rua', $rua);
    $stmt -> bindParam(':bairro', $bairro);
    $stmt -> bindParam(':estado', $estado);
    $stmt -> bindParam(':cidade', $cidade);
    $stmt -> bindParam(':fk_usuario', $fk_usuario);

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $fk_usuario = $_SESSION['usuario']['id'];


    $stmt -> execute();
    header("location: ../home/home.php");
}
catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}
$conn = null;
