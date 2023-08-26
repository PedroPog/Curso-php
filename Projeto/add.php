<?php
include 'conexao.php';

$prod = $_POST["txtProduto"];
$preco = $_POST["txtPreco"];
$qtde = $_POST["txtQtde"];
$categoria = $_POST["dsCategoria"];


$preco = str_replace(',','.',$preco);

$incluir = $url->query(" insert into produto(dsProduto,valor,estoque,idCategoria) values('$prod','$preco','$qtde','$categoria')");  
    header('location:index.php');
    
?>