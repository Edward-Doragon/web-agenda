<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "agenda";
$conn;

try{
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conectado";
}
catch(PDOException $e){
    echo "falha na conexão: " . $e -> getMessage();
}