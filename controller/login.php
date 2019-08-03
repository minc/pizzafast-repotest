<?php

	include("factoryConn.php");

	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];

	/* check connection */
	if ($mysqli->connect_errno){
		printf("A conexão falhou: %s\n", $mysqli->connect_error);
		exit();
	}

	if ($result = mysqli_query($mysqli,
		"SELECT
			ID_USUARIO, NOME_USUARIO
		FROM
			USUARIO
		WHERE
			LOGIN_USUARIO = '" . $usuario . "'
		AND
			SENHA_USUARIO = '" . $senha . "'")) {
		if (mysqli_num_rows($result) == 1) {
			$row = $result->fetch_array(MYSQLI_ASSOC);
			echo $row;
			$result->close();
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