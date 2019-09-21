<?php

	include("factoryConn.php");

	$usuario = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($_POST["usuario"])));
	$senha = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($_POST["senha"])));

	/* check connection */
	if ($mysqli->connect_errno){
		printf("A conexão falhou: %s\n", $mysqli->connect_error);
		exit();
	}

	if ($result = mysqli_query($mysqli,
		"SELECT
			ID_CLI,
			NOME_CLI,
			SENHA_CLI
		FROM
			CLIENTE
		WHERE
			LOGIN_CLI = '" . $usuario . "'")) {
		if ($result->num_rows > 0) {
			$rowCliente = $result->fetch_array(MYSQLI_ASSOC);
			print $rowCliente["ID_CLI"];
		} else {
			echo "Não entrou no IF!";
		}
	} else {
		echo "Falha na query!";
	}

	$mysqli->close();

	/*if ($result = mysqli_query($mysqli, "SELECT Name FROM City LIMIT 10")) {
		printf("Select returned %d rows.\n", mysqli_num_rows($result));

		/* free result set */
		/*mysqli_free_result($result);
	}*/

?>