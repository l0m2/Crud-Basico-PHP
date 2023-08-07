<?php
 include "conexao.php";

 $nome = $_POST["nome"];
 $email = $_POST["email"];
 $telefone = $_POST["telefone"];

$recebendo_cadastros = "INSERT INTO tb_cliente VALUES ('', '$nome','$email', '$telefone' )";

//validar cadastro
$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

//Mandar para uma certa pagina
header("location:listagem.php");
?>