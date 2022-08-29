<?php
require './templates/header.php';
require './db/database.php';
$info = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("select * from cadastro_produtos where id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if($sql->rowCount() > 0){

        $info = $sql->fetch(PDO::FETCH_ASSOC);
      
    }else{
        header("Location: listar.php");
    }
    
}else{
    header("Location: listar.php");
}

?>




<div class="container form-group ">
<?php include 'templates/navbar.php'  ?>

<div class="category row col-md">
<form action="editar_action.php" method="post">
<input type="hidden" name="id" id="" value="<?= $info['id']; ?>">

<h1 class=" mt-3 mb-3 display-6 text-center text-primary">Fabricante e categoria</h1>

<h5 class="mt-3 text-secondary text-center">Fabricante</h5>
  <div class="form-group mb-2">
    <label class="text-secondary">Fabricante:</label>
    <input type="text" name="nome_fabricante" required class="form-control"  value="<?= $info['nome_fabricante']; ?>">
  </div>

  <h5 class="mt-3 text-secondary text-center">Categoria</h5>
  <div class="form-group mb-2">
    <input type="text" name="categoria1" required class="form-control mb-1"   value="<?= $info['categoria1'] ?>">
    <input type="text" name="categoria2" required class="form-control mb-1" value="<?= $info['categoria2'] ?>" >
    <input type="text" name="categoria3" required class="form-control mb-1"  value="<?= $info['categoria3'] ?>">

  </div>




</div>

<div class="produtos   col-md">
   
   <h1 class="display-6 text-primary text-center">Produtos</h1>
   <div class="form-group mb-2">
    <label class="text-secondary">Nome do produto:</label>
    <input type="text" name="nome_produto" required class="form-control"  value="<?=$info['nome_produto']; ?>">
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Fabricante</label>
  </div>
  <select class="custom-select form-control" name="select_fabricante" value="<?= $info['select_fabricante'] ?>" id="inputGroupSelect01">
    <option value="Apple">Apple</option>
    <option value="Samsumg">Samsumg</option>
    <option value="Xiomy">Xiomy</option>
    <option value="LG">LG</option>
    <option value="Nokia">Nokia</option>
    <option value="Motorola">Motorola</option>

  </select>
</div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Opções</label>
  </div>
  <select class="custom-select form-control" value="<?= $info['select_categoria'] ?>" name="select_categoria" id="inputGroupSelect01">
    <option value="Consoles">Consoles</option>
    <option value="tvs">Tvs</option>
    <option value="smartphones">Smartphones</option>
    <option value="tablets">Tablets</option>
    <option value="notebook">Notebooks</option>
    <option value="roteador">Roteadores</option>

  </select>
</div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"> Valor R$</span>
  </div>
  <input type="text" name="valor" class="form-control" value="<?= $info['valor'] ?>">
  <div class="input-group-append">
    <span class="input-group-text">.00</span>
  </div>
</div>

  
  <button type="submit" class=" mb-4 btn btn-primary">Atualizar</button>
   </form>
</div>
<br>

<?php include 'templates/footer.php'  ?>

</div>