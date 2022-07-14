<?php
include '../services/protecao.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/reset.css">
    <link rel="stylesheet" href="../assets/navbar.css">
    <link rel="stylesheet" href="home.css">
    <link rel="shortcut icon" href="../assets/imagens/favicon.ico" type="image/x-icon">
    <title>Home</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li class="list-item"> <a href="../home/home.php">Home</a></li>
                <li class="list-item"> <a href="../add-contato/add-contato.php">Adicionar contato</a> </li>
                <li class="list-item"> <a href="../visualizar-contato/visualizar-contato.php">Visualizar Contatos</a> </li>
                <li class="list-item"> <a href="../services/close-session.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <body>
        <h3 class="welcome">Bem vindo a sua Web Agenda <?php echo $_SESSION['usuario']['nome'] ?> </h3>

    </body>
</body>
</html>