<?php

	include("factoryConn.php");

	$mysqli->autocommit(FALSE);

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

	/*if (mysqli_query($mysqli,
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
			$mysqli->rollback();
			echo 0;
			$mysqli->close();
			exit;
		} else {
			if (mysqli_query($mysqli,
				"INSERT INTO
					CLIENTE
						(
							NOME_CLI,
							LOGIN_CLI,
							DATA_CADASTRO_CLI,
							STATUS_CLI,
							SENHA_CLI,
							EMAIL_CLI
						)
					VALUES
						(
							'" . $nome . "',
							'" . $usuario . "',
							'" . $dataAtual . "',
							'1',
							'" . $senha . "',
							'" . $email . "'
						)")) {
				if ($mysqli->affected_rows == 0) {
					$mysqli->rollback();
					echo 0;
					$mysqli->close();
					exit;
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
							$mysqli->commit();
						} else {
							$mysqli->rollback();
							echo 0;
							$mysqli->close();
							exit;
						}
					} else {
						$mysqli->rollback();
						echo 0;
						$mysqli->close();
						exit;
					}
				}
			} else {
				$mysqli->rollback();
				echo 0;
				$mysqli->close();
				exit;
			}
		}
	} else {
		$mysqli->rollback();
		echo 0;
		$mysqli->close();
		exit;
	}*/

	//**//**//

	if ($result = $mysqli->query(
		"SELECT
			ID_END
		FROM
			ENDERECO
		WHERE
			LOGRADOURO_END = '" . $logradouro . "'
		AND
			NUMERO_END = '" . $numero . "'
		AND
			CEP_END = '" . $cep . "'
		LIMIT 1")) {
		$mysqli->commit();
		$row = $result->fetch_array(MYSQLI_ASSOC);
		echo $row;
		$idEndereco = $row["ID_END"];
		echo "Teste: " . $idEndereco;
		exit;
	}

?>