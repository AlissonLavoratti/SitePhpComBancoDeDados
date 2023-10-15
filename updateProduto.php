<?php 

include 'conexao.php';

$id                     = $_POST['id'];
$nomeproduto            = $_POST['nomeProduto'];
$descricao              = $_POST['descricao'];
$preco                  = $_POST['preco'];

$recebendo_cadastro = "UPDATE produto
SET nomeProduto = '$nomeproduto', descricao = '$descricao', preco = '$preco'
WHERE id = '$id'";

$query_cadastro = mysqli_query($connx,$recebendo_cadastro);

header('location: clientes.php');

?>


