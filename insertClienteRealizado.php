<?php 

include 'conexao.php';

$nome               = $_POST['nome'];
$cpf                = $_POST['cpf'];
$datan              = $_POST['datan'];
$fone               = $_POST['fone'];
$email              = $_POST['email'];

$recebendo_cadastro = "INSERT INTO cliente VALUES ('','$nome','$cpf','$datan','$fone','$email')";

$query_cadastro = mysqli_query($connx,$recebendo_cadastro);

header('location: clientes.php');

?>


