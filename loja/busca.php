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
	
	.navbar{
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

    if(empty($_GET['txtBuscar'])){
        echo "<html>
        <script>
            location.href='index.php';
        </script>
        </html>";
    }
	
    $pesquisa = $_GET['txtBuscar'];
    $consulta = $url->query("select * from listarprod where dsProduto like concat ('%','$pesquisa','%') or dsCategoria like concat ('%','$pesquisa','%')");
    if($consulta->rowCount() == 0){
        echo "<html>
        <script>
            location.href='erro2.php';
        </script>
        </html>";
    }
	?>
	
<div class="container-fluid">
	
	
	<?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"><img src="assets/imagens/<?php echo $exibe['dsCapa']; ?>.png" class="img-responsive"></div>
		<div class="col-sm-5"><h4 style="padding-top:20px"><?php echo $exibe['dsProduto'] ?></h4></div>
		<div class="col-sm-2"><h4 style="padding-top:20px"><b>R$</b> <?php echo number_format($exibe['valor'],2,',','.')?></h4></div>
		<div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">
        <a href="detalhes.php?cd=<?php echo  $exibe['idProduto']; ?>">
            <button class="btn btn-lg btn-block btn-default">
                <span class="glyphicon glyphicon-info-sign" style="color: #3f37a9"> Detalhes</span>
            </button>
            </a>
		</div> 
	</div>		
    <?php }?>
	

	
</div>
	
	<?php
	
	include 'footer.html';
	
	?>
	
</body>
</html>