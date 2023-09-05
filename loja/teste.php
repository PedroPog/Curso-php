<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
         include 'conexao.php';
         $consulta = $url->query('select * from listarprod');
         while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){
            echo $exibe['dsProduto'],'<br>';
            echo $exibe['valor'],'<br>';
            echo $exibe['dsCategoria'],'<br>';
            echo '<hr>';
         }

         
    ?>
</body>
</html>