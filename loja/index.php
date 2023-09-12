<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Sem nome)</title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'nav.php';
    include 'header.html';
    include 'conexao.php'; ?><!--Include de navbar-->

    <div class="container-fluid">
        <div class="row"> <!-- linha -->
            <?php

            $consulta = $url->query('select * from listarprod');
            while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="col-sm-3 teste">
                <?php echo '   <img src="assets/imagens/', $exibe['dsCapa'], '.png" alt="" class="img-responsive" styles="width:100%"> 
                <div><h1><b>',mb_strimwidth($exibe['dsProduto'],0,20,'...'), '</b></h1></div>
                <div><h3 style="color: red;">R$ ',number_format($exibe['valor'],2,',','.'), '</h3></div>
            </div>';
            }
                ?>
                </div>
        </div>


        <?php include 'footer.html' ?>
</body>

</html>