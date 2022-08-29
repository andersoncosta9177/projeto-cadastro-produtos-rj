<?php
  require 'db/database.php';


$nome_fabricante = filter_input(INPUT_POST, 'nome_fabricante');
$categoria1 = filter_input(INPUT_POST, 'categoria1');
$categoria2 = filter_input(INPUT_POST, 'categoria2');
$categoria3 = filter_input(INPUT_POST, 'categoria3');


$nome_produto = filter_input(INPUT_POST, 'nome_produto');
$select_fabricante = filter_input(INPUT_POST, 'select_fabricante');
$select_categoria = filter_input(INPUT_POST, 'select_categoria');
$valor = filter_input(INPUT_POST, 'valor');

if($nome_fabricante && $categoria1 && $categoria2 && $categoria3 && $nome_produto && $select_fabricante && $select_categoria && $valor){

 $sql =  $pdo->prepare("insert into cadastro_produtos (nome_fabricante, categoria1, categoria2, categoria3,nome_produto, select_fabricante, select_categoria, valor) values (:nome_fabricante, :categoria1, :categoria2, :categoria3,:nome_produto, :select_fabricante, :select_categoria, :valor)");

    $sql->bindValue(":nome_fabricante", $nome_fabricante);
    $sql->bindValue(":categoria1", $categoria1);
    $sql->bindValue(":categoria2", $categoria2);
    $sql->bindValue(":categoria3", $categoria3);
    $sql->bindValue(":nome_produto", $nome_produto);
    $sql->bindValue(":select_fabricante", $select_fabricante);
    $sql->bindValue(":select_categoria", $select_categoria);
    $sql->bindValue(":valor", $valor);
  
    $sql->execute();


    header("Location: listar.php");
    exit;



}else{
  header("Location: listar.php");
  exit;
}






?>


