<?php

	include("factoryConn.php");

	$nome = $_POST["nome"];
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	$cep = $_POST["cep"];
	$uf = $_POST["uf"];
	$logradouro = $_POST["logradouro"];
	$numero = $_POST["numero"];
	$complemento = $_POST["complemento"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$ddd = $_POST["ddd"];
	$celular = $_POST["celular"];
	$email = $_POST["email"];

	$dataAtual = date("Y-m-d H:i:s");

	/* check connection */
	if ($mysqli->connect_errno){
		printf("A conexão falhou: %s\n", $mysqli->connect_error);
		exit();
	}

	if (mysqli_query($mysqli,
		"INSERT INTO
			USUARIO
				(
					NOME_USUARIO,
					LOGIN_USUARIO,
					SENHA_USUARIO,
					STATUS_USUARIO,
					DATA_CADASTRO_USUARIO,
					EMAIL_USUARIO
				)
			VALUES
				(
					'" . $nome . "',
					'" . $usuario . "',
					'" . $senha . "',
					'1',
					'" . $dataAtual . "',
					'" . $email . "'
				)")) {
		if ($mysqli->affected_rows == 0) {
			echo "Falha!";
			exit();
		} else {
			if (mysqli_query($mysqli,
				"INSERT INTO
					ENDERECO
						(
							LOGRADOURO_END,
							NUMERO_END,
							BAIRRO_END,
							CEP_END,
							CIDADE_END,
							UF_END,
							COMPLEMENTO_END
						)
					VALUES
						(
							'" . $logradouro . "',
							'" . $numero . "',
							'" . $bairro . "',
							'" . $cep . "',
							'" . $cidade . "',
							'" . $uf . "',
							'" . $complemento . "'
						)")) {
				if ($mysqli->affected_rows == 0) {
					echo "Falha!";
					exit();
				} else {
					if (mysqli_query($mysqli,
						"INSERT INTO
							CONTATO
								(
									DDD_CONTATO,
									TIPO_CONTATO,
									NUMERO_CONTATO
								)
							VALUES
								(
									'" . $ddd . "',
									'1',
									'" . $celular . "'
								)")) {
						if ($mysqli->affected_rows > 0) {
							echo "Sucesso!";
						} else {
							echo "Não entrou no IF!";
						}
					} else {
						echo "Falha na query 3!";
					}
				}
			} else {
				echo "Falha na query 2!";
			}
		}
	} else {
		echo "Falha na query 1!";
	}

	$mysqli->close();

?>