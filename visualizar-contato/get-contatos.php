<?php
require_once "../services/conection.php";

try{

    $fk_usuario = $_SESSION['usuario']['id'];
    //delete
    if(isset($_GET['delete'])){
        $id = (int)$_GET['delete'];
        $stmt = $conn -> prepare("DELETE FROM contato WHERE id=$id");
        $stmt -> execute();
    }
    $stmt = $conn -> prepare("SELECT * FROM contato WHERE fk_usuario = $fk_usuario ");
    $stmt -> execute(); 

    $fetchContatos = $stmt->fetchAll();

    foreach($fetchContatos as $key => $value){
        echo $value['nome'].' | '.$value['telefone'];
        echo '<button type="button" class="editar-button"> <a href="../editar-contato/editar-contato.php?id='.$value['id'].'">  Editar </a> </button> ';
        echo '<button type="button" class="excluir-button"> <a href="?delete='.$value['id'].'"> Excluir </a> </button> <hr>';
        
    }
}
catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}
$conn = null;
