<?php 
require 'db/database.php';
?>
<?php include 'templates/header.php'  ?>

<div class="container form-group ">
<?php include 'templates/navbar.php'  ?>

<div class="category row col-md">
<form action="adicionar_action.php" method="post">
<h1 class=" mt-3 mb-3 display-6 text-center text-primary">Fabricante e categoria</h1>

<h5 class="mt-3 text-secondary text-center">Fabricante</h5>
  <div class="form-group mb-2">
    <label class="text-secondary">Frabricante:</label>
    <input type="text" name="nome_fabricante" required class="form-control"  placeholder="Digite o nome do frabricante">
  </div>

  <h5 class="mt-3 text-secondary text-center">Categoria</h5>
  <div class="form-group mb-2">
    <input type="text" name="categoria1" required class="form-control mb-1"  placeholder="Categoria 1">
    <input type="text" name="categoria2" required class="form-control mb-1"  placeholder="Categoria 2">
    <input type="text" name="categoria3" required class="form-control mb-1"  placeholder="Categoria 3">

  </div>




</div>

<div class="produtos   col-md">
   
   <h1 class="display-6 text-primary text-center">Produtos</h1>
   <div class="form-group mb-2">
    <label class="text-secondary">Nome do produto:</label>
    <input type="text" name="nome_produto" required class="form-control"  placeholder="Digite o nome do produto">
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Fabricante</label>
  </div>
  <select class="custom-select form-control" name="select_fabricante" id="inputGroupSelect01">
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
  <select class="custom-select form-control" name="select_categoria" id="inputGroupSelect01">
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
  <input type="text" name="valor" class="form-control" placeholder="Valor do produto">
  <div class="input-group-append">
    <span class="input-group-text">.00</span>
  </div>
</div>

  
  <button type="submit" class=" mb-4 btn btn-primary">Cadastrar</button>
   </form>
</div>
<br>

<?php include 'templates/footer.php'  ?>

</div>
