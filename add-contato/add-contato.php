<?php
    include '../services/protecao.php';
    include_once ('../services/viacep');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/navbar.css">
    <link rel="stylesheet" href="../assets/reset.css">
    <title>Document</title>
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
    
    <h1>Adicionar contato</h1>

    <form action="." method="post">

        <label> Nome: </label>
        <input type="text" id="name">

        <label for="tel">Telefone</label>
        <input type="number" id="tel">

        <label for="">Email</label>
        <input type="email">

        <label >CEP</label>
        <input type="text" placeholder="Digite um CEP">
        <button>Enviar</button>
    </form>

</body>
</html>