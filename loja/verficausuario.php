<?php 
include 'conexao.php';

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$consulta = $url->query("select idUser,usuario,email,senha,tipoUser from user where email ='$email' and senha = '$senha'");

if($consulta->rowCount() == 1){
    //echo 'Cadastrado!';
    $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
    if($exibeUsuario['tipoUser'] == 0){
        $_SESSION['ID'] = $exibeUsuario['idUser'];
        $_SESSION['Status'] = 0;
        header('location:index.php');
    }else{
    $_SESSION['ID'] = $exibeUsuario['idUser'];
    $_SESSION['Status'] = 1;
    header('location:index.php');
    }
}else{
    //echo 'Não cadastrado!';
    header('location:erro.php');
}


?>