<?php 
 include("cabecalho.php");
 include("banco-produto.php");
 include("conecta.php");
 include("logica-usuario.php");

$id = $_POST['id'];
removeProduto($conexao, $id);
$_SESSION["success"]= "Produto removido com sucesso";
header("location: produto-lista.php");
die();

 ?>

