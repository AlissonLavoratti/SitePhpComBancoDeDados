<?php 

include 'conexao.php';

$id               = $_POST['id'];

$recebendo_cadastro = "DELETE FROM produto WHERE id = '$id'";

$query_cadastro = mysqli_query($connx,$recebendo_cadastro);

header('location: produtos.php');

?>


