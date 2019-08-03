<?php

	include("factoryConn.php");

	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];

	if ($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	} else {
		echo "Sucesso!";
	}

?>