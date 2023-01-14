<?php
//Requisição do banco de dados
require_once __DIR__ . "/connection.php";

//Recebe os dados digitados em listing.php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

//Insere os valores da tb_cliente e os valores digitados.
$recebendo_cadastro = "INSERT INTO tb_cliente VALUES ('', '$name', '$email', '$phone')";
//Validando a conexão.
$query_cadastro = mysqli_query($connx, $recebendo_cadastro);

//Retorno para a página listing.php
header('location:listing.php');

?>
