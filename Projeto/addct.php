<?php
include 'conexao.php';

$cate = $_POST["dsCategoria"];


$incluir = $url->query(" insert into categoria(dsCategoria) values('$cate')");  
    header('location:index.php');
    
?>