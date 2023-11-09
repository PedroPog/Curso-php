    <?php 
    $cat = $_GET['cat'];
    ?><!--Include de navbar-->

    <div class="container-fluid" style="margin-bottom: 10%;">
        <div class="row"> <!-- linha -->
            <?php $consulta = $url->query("select idProduto,dsProduto,valor,dsCapa,estoque from listarprod where dsMarca = '$cat'");
            while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="col-sm-3 teste">
                    <img src="assets/imagens/<?php echo $exibe['dsCapa'] ?>.png" alt="" class="img-responsive" styles="width:100%">
                    <div>
                        <h3><b><?php echo mb_strimwidth($exibe['dsProduto'], 0, 20, '...') ?></b></h3>
                    </div>
                    <div>
                        <h4 style="color: red;">R$ <?php echo number_format($exibe['valor'], 2, ',', '.') ?></h4>
                    </div>
                    <div class="text-center">
                    <a href="detalhes.php?cd=<?php echo  $exibe['idProduto']; ?>">
                    <button class="btn btn-lg btn-block btn-default">
                        <span class="glyphicon glyphicon-info-sign" style="color: #3f37a9"> Detalhes</span>
                    </button>
                    </a>
                    </div>
                    <div class="text-center" style="margin-top: 5px; margin-bottom: 5px">
                        <?php if ($exibe['estoque'] > 0) { ?>
                            <button class="btn btn-lg btn-block btn-info">
                                <span class="glyphicon glyphicon-usd"> Compar</span>
                            </button>
                        <?php } else { ?>
                            <button class="btn btn-lg btn-block btn-danger" disabled>
                                <span class="glyphicon glyphicon-remove-circle"> Indisponível</span>
                            </button>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>