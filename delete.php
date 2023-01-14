<?php
//Requisição do banco de dados
require_once __DIR__ . "/connection.php";

//Recebe os dados digitados em listing.php
$id = $_POST['id'];


//Insere os valores da tb_cliente e os valores digitados.
$recebendo_cadastro = "DELETE FROM tb_cliente WHERE id = '$id' ";
//Validando a conexão.
$query_cadastro = mysqli_query($connx, $recebendo_cadastro);

//Retorno para a página listing.php
header('location:listing.php');

?>
