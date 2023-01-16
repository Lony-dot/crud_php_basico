<?php
//Requisição do banco de dados
require "connection.php";

//Recebe os dados digitados em listing.php
$id = $_POST['id'];
$nome = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

//Insere os valores da tb_cliente e os valores digitados.
$recebendo_cadastro = "UPDATE tb_cliente 
SET  name = '$name', email='$email', phone='$phone' WHERE id = '$id' ";
//Validando a conexão.
$query_cadastro = mysqli_query($connx, $recebendo_cadastro) or die (mysqli_error($connx));

//Retorno para a página listing.php
header('location:listing.php');


