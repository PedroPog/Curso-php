
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
                <legend>Cadastro de Categoria</legend>
                <form name="frmCad"  action="addct.php" method="POST">
                    <div>
                        <p>Categoria:<br>
                            <input type="text" name="dsCategoria" required class="campo">
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