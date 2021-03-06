<?php
    include ('../services/protecao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/reset.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/navbar.css">
    <link rel="stylesheet" href="add-contato.css">
    <link rel="shortcut icon" href="../assets/imagens/favicon.ico" type="image/x-icon">
    <title>Adicionar Contato</title>
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
    
    <h1 class="title">Adicionar contato</h1>


    <form class="add-form" action="save-contato.php" method="post">

        <label class="form-label" for="name"> Nome: </label >
        <input class="form-input" type="text" id="name"  placeholder="Nome" name="nome" required>

        <label class="form-label" for="tel">Telefone</label>
        <input class="form-input" type="cel" id="tel"  placeholder="Telefone" name="telefone" required>

        <label class="form-label" for="email">E-mail</label>
        <input class="form-input" type="email" id="email" placeholder="Email" name="email">

        <label class="form-label" for="cep">CEP</label>
        <input class="form-input" type="text" id="cep" placeholder="CEP" name="cep" >

        <label class="form-label" for="rua">Rua</label>
        <input class="form-input" type="text" id="rua" placeholder="Rua" name="rua" >

        <label class="form-label" for="bairro">Bairro</label>
        <input class="form-input" type="text" id="bairro" placeholder="Bairro" name="bairro">

        <label class="form-label" for="estado">Estado</label>
        <input class="form-input" type="text" id="estado" placeholder="Estado" name="estado" >

        <label class="form-label" for="cidade">Cidade</label>
        <input class="form-input" type="text" id="cidade" placeholder="Cidade" name="cidade" >

        <button class="button" type="submit">Salvar Contato</button>
    </form>

</body>

<script src="../services/viaCep.js"></script>
</html>