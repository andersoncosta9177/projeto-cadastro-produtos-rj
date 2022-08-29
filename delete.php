<?php

require './db/database.php';


$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("delete from  cadastro_produtos where id = :id");
$sql->bindValue(":id", $id);
$sql->execute();

header("Location: listar.php");
exit;


}

header("Location: listar.php");
exit;




?>