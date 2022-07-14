<?php  
$mysqli = new mysqli("localhost", "root", "", "acme");

if ($mysqli->connect_errno){
	echo "Houve um erro na tentativa de conexão com MySQL: (" . $mysqli->connect_errno . ") " . $mysqli -> connect_error;
}

$sql = "DESCRIBE departamentos";

$result = $mysqli->query($sql);

echo "<b>departamentos<b/>: <br />";

while ($field = $result -> fetch_assoc()) {
	foreach ($field as $key => $value) {
		echo "<b>$key</b>: $value <br />";
	}
}

$sql = "DESCRIBE mercadorias";

$result = $mysqli->query($sql);

echo "<br>mercadorias</br>: <br/";

while($field = $result->fetch_assoc()){
	foreach ($field as $key => $value) {
		echo "<b>$key</b>: $value <br/>";
	}

}

$mysqli->close();

?>