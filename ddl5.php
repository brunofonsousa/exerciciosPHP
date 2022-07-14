<?php  
$mysqli = new mysqli("localhost", "root", "", "acme");

if ($mysqli->connect_errno){

	echo "Houve um erro na tentativa de conexão com o MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}

$sql = "ALTER TABLE departamentos CHANGE COLUMN nome nome VARCHAR(80)";

if ($mysqli->query($sql) === TRUE) {

	echo "Tabela departamentos alterada com sucesso.";
} else {
	echo "Erro na alteração da tabela: " . $mysqli->error;
}

$mysqli->close();

?>