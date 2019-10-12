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
			DATA_CADASTRO_CLI,
			STATUS_CLI,
			DATA_ACESSO_CLI,
			SENHA_CLI,
			ENDERECO_ID_END,
			EMAIL_CLI
		FROM
			CLIENTE
		WHERE
			LOGIN_CLI = '" . $usuario . "'")) {
		if ($result->num_rows > 0) {
			$rowCliente = $result->fetch_array(MYSQLI_ASSOC);
			if (!password_verify($senha, $rowCliente["SENHA_CLI"])) {
				echo "senha" . "|";
				$mysqli->close();
				exit;
			} else if ($rowCliente["STATUS_CLI"] != "1") {
				echo "status" . "|";
				$mysqli->close();
				exit;
			} else {
				echo $rowCliente["ID_CLI"] . "|" . $rowCliente["NOME_CLI"] . "|" . $rowCliente["DATA_CADASTRO_CLI"] . "|" . $rowCliente["STATUS_CLI"] . "|" . $rowCliente["DATA_ACESSO_CLI"] . "|" . $rowCliente["SENHA_CLI"] . "|" . $rowCliente["ENDERECO_ID_END"] . "|" . $rowCliente["EMAIL_CLI"] . "|" . $usuario;
				$mysqli->close();
				exit;
			}
		} else {
			echo "senha" . "|";
			$mysqli->close();
			exit;
		}
	} else {
		echo "falha" . "|";
		$mysqli->close();
		exit;
	}

?>