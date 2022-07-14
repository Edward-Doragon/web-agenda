<?php
include '../services/protecao.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/reset.css">
    <link rel="stylesheet" href="../assets/navbar.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="visualiza.css">
    <link rel="shortcut icon" href="../assets/imagens/favicon.ico" type="image/x-icon">
    <title>Visualizar Contatos</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li class="list-item"> <a href="../home/home.php">Home</a></li>
                <li class="list-item"> <a href="../add-contato/add-contato.php">Adicionar contato</a> </li>
                <li class="list-item"> <a href="../visualizar-contato/visualizar-contato.php">Visualizar Contatos</a> </li>
                <li class="list-item"> <a href="../login/login.html">Sair</a></li>
            </ul>
        </nav>
    </header>
    <h1 class="title">Contatos</h1>

    <div class="wrapper-contatos">
        <?php 
            include "get-contatos.php";
        ?>
    </div>

</body>
</html>