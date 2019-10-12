<?php

	include("factoryConn.php");

	$email = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($_POST["email"])));

	if ($mysqli->connect_errno) {
		printf("A conexão falhou: %s\n", $mysqli->connect_error);
		exit();
	}

	if ($result = mysqli_query($mysqli,
		"SELECT
			?
		FROM
			CLIENTE
		WHERE
			EMAIL_CLI = '" . $email . "'")) {}

?>