<?php 

include 'conexao.php';

$id                 = $_POST['id'];
$nome               = $_POST['nome'];
$cpf                = $_POST['cpf'];
$datan              = $_POST['datan'];
$fone               = $_POST['fone'];
$email              = $_POST['email'];

$update_cadastro = "UPDATE cliente
SET nome = '$nome', cpf = '$cpf', datan = '$datan', fone = '$fone', email = '$email'
WHERE id = '$id'";

$query_cadastro = mysqli_query($connx, $update_cadastro) or die (mysqli_error($connx));

header('location: clientes.php');   

?>


