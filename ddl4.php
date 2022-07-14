<?php  
$mysqli = new mysqli("localhost", "root", "", "acme");

if ($mysqli->connect_errno){

	echo "Houve um erro na tentativa de conexão com MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}

$sql = "CREATE TABLE departamentos(codigo integer AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(30))";

if ($mysqli->query($sql) === TRUE){

	echo "Tabela departamentos criada com sucesso.";
} else {
	echo "Erro na criação da tabela: " . $mysqli -> error;
}


$sql = "CREATE TABLE mercadorias(codigo integer AUTO_INCREMENT PRIMARY KEY, produto VARCHAR(80), preco_unitario FLOAT, codigo_departamento integer)";

if ($mysqli->query($sql) === TRUE){
	echo "Tabela mercadorias criada com sucesso.";
} else {
	echo "Erro na criação da tabela: " . $mysqli->error;
}

$mysqli->close();

?>