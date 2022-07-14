<?php

require_once "../services/conection.php";
session_start();

try{
    $stmt = $conn -> prepare("UPDATE contato SET nome = :nome, email = :email, telefone = :telefone, cep = :cep, rua = :rua, bairro = :bairro, estado = :estado, cidade = :cidade WHERE id = :id_contato");

    $stmt -> bindParam(':nome', $nome);
    $stmt -> bindParam(':email', $email);
    $stmt -> bindParam(':telefone', $telefone);
    $stmt -> bindParam(':cep', $cep);
    $stmt -> bindParam(':rua', $rua);
    $stmt -> bindParam(':bairro', $bairro);
    $stmt -> bindParam(':estado', $estado);
    $stmt -> bindParam(':cidade', $cidade);
    $stmt -> bindParam(':id_contato', $id_contato);

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $id_contato = $_GET['id'];


    $stmt -> execute();
    header("location: ../home/home.php");
}
catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}
$conn = null;
