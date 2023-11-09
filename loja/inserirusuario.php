<?php 

include 'conexao.php';

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$cidade = $_POST['txtcidade'];
$senha = $_POST['txtsenha'];
$cep = $_POST['txtcep'];
$end = $_POST['txtendereco'];


$consulta = $url->query("select email from user  where email ='$email'");
$exibe = $consulta ->fetch(PDO::FETCH_ASSOC);

if($consulta->rowCount() == 1){
    header('location:erro1.php');
}else{
    $incluir = $url->query("insert into user(usuario,email,senha,tipoUser,endereco,cidade,cep)
    values('$nome','$email','$senha','0','$end','$cidade','$cep')");
    header('location:ok.php');
}
?>