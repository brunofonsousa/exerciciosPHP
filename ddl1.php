<?php

$mysqli = new mysqli("localhost", "root", "");
if ($mysqli->connect_errno) {

	echo "Houve um erro na tentativa de conexão com MySQL:
(" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";
$mysqli->close();

?>