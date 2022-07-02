<?php
    session_start(); //Inicia sessão

    if(!isset($_SESSION['usuario'])){
        header("location: /login/login.php");
}