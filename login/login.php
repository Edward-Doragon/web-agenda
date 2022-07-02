<?php
require_once "../services/conection.php";
try{
    $stmt = $conn -> prepare ("SELECT * FROM usuario WHERE email = :email");
    $stmt -> bindParam(':email', $email);
    $stmt -> execute();

    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt -> fetch();
    $hash = $result['senha'];

    /*
    if( ! password_verify($_POST['senha'], $hash)){
        echo ("deu ruim");
        exit;
    }
    */
    header("location: ../home/home.html");
}
catch(PDOException $e){
    echo "ERRO: " .$e -> getMessage();
}
$conn = null;