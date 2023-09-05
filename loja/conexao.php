<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "1234";
    $banco = "db_loja";

    $url = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha)
?>