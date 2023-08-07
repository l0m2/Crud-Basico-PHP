<?php
 include "conexao.php";

 $id = $_POST["id"];
 

$recebendo_cadastros = "DELETE FROM tb_cliente WHERE id = '$id' ";

//validar cadastro
$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

//Mandar para uma certa pagina
header("location:listagem.php");
?>