<?php
//----------------------------------------------------
// DB connection function
// Use CONSTANTS defined in config.inc
//----------------------------------------------------


function ConnectDB()
{
	$array_ini = parse_ini_file("../config.ini");
    $mysqli = new mysqli($array_ini["DB_URL"],$array_ini["DB_USER"],$array_ini["DB_PATH"],$array_ini["DB_NAME"]);
    	
	if ($mysqli->connect_errno) {
		include '../Views/MESSAGE_View.php';
		new MESSAGE("Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error, '../index.php');
		return false;
	}
	else{
        $mysqli->set_charset("utf8");
		return $mysqli;
	}
}

?>