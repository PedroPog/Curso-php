<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "12345678";
    $banco = "bd_prod2B";

    $url = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha)
?>