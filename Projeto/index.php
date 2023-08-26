<?php 
include 'head.php';
?>

<body>
    <?php
include 'nav.php';
?>
<?php 
        include 'conexao.php';
        $rodarc = $url -> query("select * from categoria");
        $rodarp = $url -> query("select * from produto");
    ?>



    <p>Selecione a categoria:<br>
        <select name="dsCategoria" required class="campo">
            <option value="" selected>Escolha a Categoria</option>
            <?php 
                                    while($vCategoria=$rodarc->fetch(PDO::FETCH_ASSOC)){
                                        ?><option value="<?php echo $vCategoria['idCategoria']; ?>"><?php echo 
                                        $vCategoria['dsCategoria']; ?></option>
            <?php   } ?>
        </select>
    </p>

    <p>Selecione a categoria:<br>
        <select name="dsProduto" required class="campo">
            <option value="" selected>Escolha o Produto</option>
            <?php 
                                    while($vProduto=$rodarp->fetch(PDO::FETCH_ASSOC)){
                                        ?><option value="<?php echo $vProduto['idProduto']; ?>"><?php echo 
                                        $vProduto['dsProduto']; ?></option>
            <?php   } ?>
        </select>
    </p>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>