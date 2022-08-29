<?php require 'templates/header.php';

require './db/database.php';
$lista = [];
  $temProduto;
$sql = $pdo->query("select * from cadastro_produtos order by id desc ");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

}
?>

<div class="container">
<?php require 'templates/navbar.php'?>

    <h1 class="display-6 text-center mt-3 mb-3 text-primary">Lista de produtos cadastrados</h1>


    <table class="table table-bordered table-expand-md">
<thead class="thead-dark">
    <tr class="text-center">
    <th>ID:</th>

      <th>Fabricante</th>
      <th>Categoria 1</th>
      <th>Categoria 2</th>
      <th>Categoria 3</th>
      <th>Produto</th>
      <th>Fabricante</th>
      <th>Categoria</th>
      <th>Valor</th>
      <th>Ações</th>

    </tr>
  </thead>

    <tbody>
    <?php 
    foreach($lista as $produto):?>
        <tr><td class="text-center"><?php echo $produto['id']; ?></td>
            <td class="text-center"><?php echo $produto['nome_fabricante']; ?></td>
            <td class="text-center" ><?php echo $produto['categoria1']; ?></td>
            <td class="text-center"><?php echo $produto['categoria2']; ?></td>

            <td class="text-center"><?php echo $produto['categoria3']; ?></td>
            <td class="text-center" ><?php echo $produto['nome_produto']; ?></td>
            <td class="text-center"><?php echo $produto['select_fabricante']; ?></td>
            <td class="text-center"><?php echo $produto['select_categoria']; ?></td>
            <td class="text-center">R$: <?php echo $produto['valor']; ?></td>


            
            <td class="bnts">
                <a class="btn btn-warning" href="editar.php?id=<?= $produto['id']; ?>">Editar</a>
                <a onclick="return confirm('Excluir agendamento?')" class="btn btn-danger float-end" href="delete.php?id=<?= $produto['id'] ?>">Excluir</a>
            </td>

        </tr>
        <?php endforeach; ?>
    </tbody>

</table>

<?php    if($sql->rowCount() === 0):?>
    <h1 class=" text-center  display-6 text-secondary">Não há produtos cadastrados</h1>

 <?php endif; ?>




    <?php require 'templates/footer.php'?>
</div>

