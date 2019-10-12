<?php

	include("factoryConn.php");

	echo $usuario = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($_POST["usuario"])));
	echo $email = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($_POST["email"])));
	exit();

	if ($mysqli->connect_errno) {
		printf("A conexão falhou: %s\n", $mysqli->connect_error);
		exit();
	}

	if ($result = mysqli_query($mysqli,
		"SELECT
			ID_CLI
		FROM
			CLIENTE
		WHERE
			LOGIN_CLI = '" . $usuario . "'
		AND
			EMAIL_CLI = '" . $email . "'")) {
		
	}

?>