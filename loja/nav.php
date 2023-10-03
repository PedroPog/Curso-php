<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="marca.php">Marcas</a></li>
            <li><a href="categoria.php?cat=tenis">Tenis</a></li>
            <li><a href="categoria.php?cat=acessorio">Acessorios</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#contato">Contato</a></li>
        <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"> Logon</a></li>
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
