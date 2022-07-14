<?php
require_once "../services/conection.php";

try{
    $stmt = $conn -> prepare("SELECT * FROM contato WHERE id = :id");

    $stmt -> bindParam(':id', $_GET['id']);
    $stmt -> execute();

    $fetchContatos = $stmt->fetch();

    if ($fetchContatos == false) {
        http_response_code(404);
        exit;
    }

    echo json_encode($fetchContatos);
}
catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}
$conn = null;
