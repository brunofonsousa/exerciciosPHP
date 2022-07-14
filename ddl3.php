<?php  

$mysqli = new mysqli("localhost", "root", "");

if ($mysqli->connect_errno){

	echo "Houve um erro na tentativa de conexão com MySQL:
	(" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
}


$sql = "CREATE DATABASE acme CHARACTER SET utf8 COLLATE utf8_unicode_ci";

if ($mysqli->query($sql) === TRUE){
	echo "Banco de dados criado com sucesso";
} else {
	echo "Erro na criação do banco de dados: " . $mysqli->error;
}

$mysqli->close();


?>