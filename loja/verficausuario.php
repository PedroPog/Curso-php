<?php 
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$consulta = $url->query("select idUser,usuario,email,senha,tipoUser from user where email ='$email' and senha = '$senha'");

if($consulta->rowCount() == 1){
    echo 'Cadastrado!';
}else{
    echo 'Não cadastrado!';
}


?>