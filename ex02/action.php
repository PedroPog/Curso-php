<?php 
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$sexo = $_POST["sexo"];
$estado = $_POST['estado'];

echo "<div><H1>Seus dados</H1>
 <p>Nome: $nome</p>
 <p>email: $email</p>
 <p>sexo: $estado</p>
 <p>senha: $senha</p>
 <p>sexo: $sexo</p></div>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form:restu</title>
</head>

<body>
    <style>
    body {
        border: solid;
        margin: 10vw 15%;
        font-family: cursive;
        padding: 4% 0;
        background: aliceblue;
        box-shadow: 3px 5px 10px 6px #ffa4a445;
    }
    div{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        text-align: center;
    }
    }
    </style>

</body>

</html>