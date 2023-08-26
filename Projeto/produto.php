
<?php 
include 'head.php';
?>

<body>
<?php
include 'nav.php';
?>

    <?php 
        include 'conexao.php';
        $rodar = $url -> query("select * from categoria");
    ?>
    <div id="container">
        <div id="caixa">
            <fieldset>
                <legend>Cadastro de Produtos</legend>
                <form name="frmCad"  action="add.php" method="POST">
                    <div>
                        <p>Produto:<br>
                            <input type="text" name="txtProduto" required class="campo">
                        </p>
                    </div>
                    <div>
                        <p>Valor do Produto:<br>
                           <input type="text" name="txtPreco" maxlength="6" required class="campo">
                        </p>
                    </div>
                    <div class="bloco">
                        <p>Quantidade em estoque:<br>
                           <input type="number" name="txtQtde" maxlength="6" required class="campo">
                        </p>
                    </div>
                    <div>
                        <p>Selecione a categoria:<br>
                            <select name="dsCategoria" required class="campo">
                                <option value="" selected>Escolha a Categoria</option>
                                <?php 
                                    while($vCategoria=$rodar->fetch(PDO::FETCH_ASSOC)){
                                        ?><option value="<?php echo $vCategoria['idCategoria']; ?>"><?php echo 
                                        $vCategoria['dsCategoria']; ?></option>
                                <?php   } ?>
                            </select>
                        </p>
                    </div>
                    <div class="bloco">
                        <p>
                           <input type="submit" value="Enviar" class="btn">
                           <input type="reset" value="limpar" class="btn">
                        </p>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</body>
</html>