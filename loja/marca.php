<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Sem nome) -- Cantegoria</title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'nav.php';
    include 'header.html';
    include 'conexao.php'; 
    $cat = '';
    ?><!--Include de navbar-->

    <div class="container-fluid">
        <div class="row"> <!-- linha -->
            <?php $consulta = $url->query('SELECT * FROM db_loja.marca;');
            while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="col-sm-3 teste">
                <img src="assets/imagens/<?php echo $exibe['dsCapa'] ?>.png" alt="" class="img-responsive" styles="width:100%"> 
                <div><h3 class="text-center"><b><?php echo mb_strimwidth($exibe['dsMarca'],0,20,'...')?></b></h3></div>
                <div class="text-center">
                    <button class="btn btn-lg btn-block btn-default" >
                    <a href='marca.php?cat=<?php echo $exibe['dsMarca'] ?>'>Ir</a>
                    </button>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <hr>
    <?php 
    include 'pdMarca.php';
    ?>

    <?php include 'footer.html' ?>
</body>

</html>