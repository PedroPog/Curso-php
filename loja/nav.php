<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php">(Sem nome)</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""><a href="./index.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="./lancamento.php">Lançamentos</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">Categoria <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="marca.php">Marcas</a></li>
                        <li><a href="categoria.php?cat=tenis">Tenis</a></li>
                        <li><a href="categoria.php?cat=acessorio">Acessorios</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#contato">Contato</a></li>
                <?php 
          if(empty ($_SESSION['ID'])){?>
                <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"> Login</a></li>
                <?php } else{
                  $consulta_usuario = $url->query("select usuario from user where idUser = '$_SESSION[ID]';");
                  $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
                if($_SESSION['Status'] == 0){ ?>
                <li><a href="#"><span class="glyphicon glyphicon-user"> <?php echo $exibe_usuario['usuario']; ?></a>
                </li>
                <li><a href="./sair.php"><span class="glyphicon glyphicon-log-out"> Log-out</a></li>
                <?php }else{?>
                  <li><a href="adm.php"><button class="btn btn-sm btn-danger">Administrador</button></a></li>
                <li><a href="./sair.php"><span class="glyphicon glyphicon-log-out"> Log-out</a></li>
                  <?php } ?>
                <?php } ?>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar...">
                </div>
                <button type="submit" class="btn btn-default">Pesquisar</button>
            </form>
        </div>
    </div>
</nav>