<?php
require_once "../services/conection.php";

try{

    //delete
    if(isset($_GET['delete'])){
        $id = (int)$_GET['delete'];
        $stmt = $conn -> prepare("DELETE FROM contato WHERE id=$id");
        $stmt -> execute();
    }
    $stmt = $conn -> prepare("SELECT * FROM contato");
    $stmt -> execute();

    $fetchContatos = $stmt->fetchAll();

    foreach($fetchContatos as $key => $value){
        echo $value['nome'].' | '.$value['telefone'];
        echo '<button type="button"> <a href="?delete='.$value['id'].'"> Excluir </a> </button>';
        echo '<button type="button"> <a href="../editar-contato/editar-contato.php"> Editar </a> </button> <hr>';
    }
}
catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}
$conn = null;
