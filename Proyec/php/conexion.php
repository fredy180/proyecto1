
<?php
	
	$mysqli = new mysqli("localhost", "root", "root", "portalmate");
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



?>