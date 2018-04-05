<?php
include("logica-usuario.php");
logout();
$_SESSION["success"] = "deslogado com sucesso";
header("location: index.php");
die();


 ?>