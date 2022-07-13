<?php
require_once "../services/conection.php";
try{
    $stmt = $conn -> prepare ("SELECT * FROM usuario WHERE email = :email" );
    $stmt -> bindParam(':email', $_POST['email']);
    $stmt -> execute();

    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt -> fetch();
    $hash = $result['senha'];
    
    if( password_verify($_POST['senha'], $hash)){
        session_start();
        $_SESSION['usuario'] = $result;
        header("location: ../home/home.php");
        exit();
    }else{
        echo ("E-mail ou Senha Inválido");
        exit();
    }
}
catch(PDOException $e){
    echo "ERRO: " .$e -> getMessage();
}
$conn = null;