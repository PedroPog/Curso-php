<?php 
include 'head.php';
?>
<style>
    .teste{
    width: 100rem;
    display: flex;
    align-items: center;
    padding: 2em 1em;
    }
}
</style>
<body>
    <?php
include 'nav.php';
include 'conexao.php';
?>

    <?php 

if(!isset($_GET['txtBusca'])){
    echo "";
}
else{
    $nomeProd=$_GET['txtBusca'];
    $buscaProd=$url->query("select * from vwproduto where dsProduto LIKE '%$nomeProd%'");
    ?>
    <div class="card teste" style="width: 100rem;">
    <table border="1" width="80%">
        <tr>
            <th width="10%">Código</th>
            <th width="20%">Produto</th>
            <th width="10%">Valor</th>
            <th width="10%">Quantidade</th>
            <th width="10%">Categoria</th>
            <th width="10%">Alterar</th>
            <th width="10%">Excluir</th>
        </tr>
        <?php
        while($vetor=$buscaProd->fetch(PDO::FETCH_ASSOC)){
    ?>
        <tr>
            <td width="10%"><?php echo $vetor['idProduto'];?></td>
            <td width="20%"><?php echo $vetor['dsProduto'];?></td>
            <td width="10%"><?php echo $vetor['valor'];?></td>
            <td width="10%"><?php echo $vetor['estoque'];?></td>
            <td width="10%"><?php echo $vetor['dsCategoria'];?></td>
            <th width="10%"><a href="alterar.php?cd=<?php echo $vetor['idProduto']; ?>"><i class="bi bi-pencil-square" ></i></a></th>
            <th width="10%"><a href="excluir.php?cd=<?php echo $vetor['idProduto']; ?>"><i class="bi bi-trash3-fill"></i></a></th>
        </tr>
        <?php }?>
    </table>
    <?php }?>
    </div>