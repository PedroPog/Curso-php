<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Sem nome) -- Lançamento</title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'nav.php';
    include 'header.html';
    include 'conexao.php'; ?><!--Include de navbar-->

    <div class="container-fluid" style="margin-bottom: 10%;">
        <div class="row"> <!-- linha -->
            <?php $consulta = $url->query('select dsProduto,valor,dsCapa,estoque from listarprod where sgLancamento = "S"');
            while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="col-sm-3 teste">
                <img src="assets/imagens/<?php echo $exibe['dsCapa'] ?>.png" alt="" class="img-responsive" styles="width:100%"> 
                <div><h3><b><?php echo mb_strimwidth($exibe['dsProduto'],0,20,'...')?></b></h3></div>
                <div><h4 style="color: red;">R$ <?php echo number_format($exibe['valor'],2,',','.')?></h4></div>
                <div class="text-center">
                    <button class="btn btn-lg btn-block btn-default">
                        <span class="glyphicon glyphicon-info-sign" style="color: #3f37a9"> Detalhes</span>
                    </button>
                </div>
                <div class="text-center" style="margin-top: 5px; margin-bottom: 5px">
                <?php if($exibe['estoque'] > 0) {?>
                    <button class="btn btn-lg btn-block btn-info">
                        <span class="glyphicon glyphicon-usd"> Compar</span>
                    </button>
                <?php }else {?>
                    <button class="btn btn-lg btn-block btn-danger" disabled>
                        <span class="glyphicon glyphicon-remove-circle"> Indisponível</span>
                    </button>
                <?php }?>  
                </div>
            </div>
            <?php }?>
        </div>
    </div>


    <?php include 'footer.html' ?>
</body>

</html>