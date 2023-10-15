<?php 

include 'conexao.php';

$id               = $_POST['id'];

$recebendo_cadastro = "DELETE FROM cliente WHERE id = '$id'";

$query_cadastro = mysqli_query($connx,$recebendo_cadastro);

header('location: clientes.php');

?>


