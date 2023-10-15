<?php 

include 'conexao.php';
$id                     = $_POST['id'];
$nomeproduto            = $_POST['nomeProduto'];
$descricao              = $_POST['descricao'];
$preco                  = $_POST['preco'];


$recebendo_cadastro = "INSERT INTO produto VALUES ('','$nomeproduto','$descricao','$preco')";

$query_cadastro = mysqli_query($connx,$recebendo_cadastro);

header('location: produtos.php');

?>