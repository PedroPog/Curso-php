<!doctype html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Minha Loja</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
    .navbar {
        margin-bottom: 0;
    }
    </style>



</head>

<body>

    <?php
	
	session_start();
	
	include 'conexao.php';	
	include 'nav.php';
	include 'header.html';

    if(!empty($_GET['cd'])){
        $id_produto = $_GET['cd'];
        $consulta = $url ->query("select * from listarprod where idProduto ='$id_produto' "); 
        $exiber = $consulta->fetch(PDO::FETCH_ASSOC);
    }else{
        header("location:index.php");
    }

    
	
	?>

    <div class="container-fluid">



        <div class="row">

            <div class="col-sm-4 col-sm-offset-1">

                <h1>Detalhes do Produto</h1>
                <!-- https://placehold.it/900x640  https://placehold.it/900x640 -->
                <img src="assets/imagens/<?php echo $exiber['dsCapa']; ?>.png" class="img-responsive"
                    style="width:100%;">

                <div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;"><img
                        src="assets/imagens/<?php echo $exiber['dsCapa']; ?>-1.png" class="img-responsive"></div>
                <div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;"><img
                        src="assets/imagens/<?php echo $exiber['dsCapa']; ?>-2.png" class="img-responsive"></div>

            </div>


            <div class="col-sm-7">
                <h1><?php echo $exiber['dsProduto']; ?></h1>

                <p><b>Descrição do Produto</b></p>

                <p><?php echo $exiber['dsMarca']; ?> - <?php echo $exiber['dsEstilo']; ?></p>

                <p><b>R$</b> <?php echo number_format($exiber['valor'],2,',','.')?></p>


                <?php if($exiber['estoque'] > 0) {?>
                <button class="btn btn-lg btn-block btn-info">
                    <span class="glyphicon glyphicon-usd"> Comprar</span>
                </button>
                <?php }else {?>
                <button class="btn btn-lg btn-block btn-danger" disabled>
                    <span class="glyphicon glyphicon-remove-circle"> Indisponível</span>
                </button>
                <?php }?>
                <!--<button class="btn btn-lg btn-success">Comprar</button>-->

            </div>



        </div>

        <?php
	
	include 'footer.html';
	
	?>

</body>

</html>