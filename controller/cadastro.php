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

	if ($mysqli->connect_errno) {
		printf("A conexão falhou: %s\n", $mysqli->connect_error);
		exit();
	}

	//verifica se o usuário já foi cadastrado antes.

	if ($result = mysqli_query($mysqli,
		"SELECT
			ID_CLI
		FROM
			CLIENTE
		WHERE
			LOGIN_CLI = '" . $usuario . "'")) {
		if ($result->num_rows > 0) {
			echo 2;
			$mysqli->close();
			exit;
		}
	} else {
		echo 0;
		$mysqli->close();
		exit;
	}

	//verifica se as informações de endereço e contato já foram cadastradas antes.

	if ($result = mysql_query($mysqli,
		"SELECT
			ID_END
		FROM
			ENDERECO
		WHERE
			LOGRADOURO_END = '" . $logradouro . "'
		AND
			NUMERO_END = '" . $numero . "'
		AND
			BAIRRO_END = '" . $bairro . "'
		AND
			CEP_END = '" . $cep . "'
		AND
			CIDADE_END = '" . $cidade . "'
		AND
			UF_END = '" . $uf . "'")) {
		if ($result->num_rows > 0) {
			$enderecoBase = true;
			$rowEndereco = $result->fetch_array(MYSQLI_ASSOC);
			$idEndereco = $rowEndereco["ID_END"];
		} else {
			$enderecoBase = false;
		}
	} else {
		echo 0;
		$mysqli->close();
		exit;
	}

	if ($result = mysqli_query($mysqli,
		"SELECT
			ID_CONTATO
		FROM
			CONTATO
		WHERE
			DDD_CONTATO = '" . $ddd . "'
		AND
			TIPO_CONTATO = '1'
		AND
			NUMERO_CONTATO = '" . $celular . "'")) {
		if ($result->num_rows > 0) {
			$contatoBase = true;
		} else {
			$contatoBase = false;
		}
	} else {
		echo 0;
		$mysqli->close();
		exit;
	}

	//realiza os INSERTs nas tabelas da base de dados.

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
		if ($mysqli->affected_rows == 0 || $enderecoBase) {
			$mysqli->rollback();
		}
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
			if ($mysqli->affected_rows == 0 || $contatoBase) {
				$mysqli->rollback();
			}
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
				if ($mysqli->affected_rows > 0) {
					//$mysqli->commit();
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

	//realiza os UPDATEs de ligação das tabelas da base de dados.

	if (!$enderecoBase) {
		if ($result = mysql_query($mysqli,
			"SELECT
				ID_END
			FROM
				ENDERECO
			WHERE
				LOGRADOURO_END = '" . $logradouro . "'
			AND
				NUMERO_END = '" . $numero . "'
			AND
				BAIRRO_END = '" . $bairro . "'
			AND
				CEP_END = '" . $cep . "'
			AND
				CIDADE_END = '" . $cidade . "'
			AND
				UF_END = '" . $uf . "'")) {
			if ($result->num_rows > 0) {
				$rowEndereco = $result->fetch_array(MYSQLI_ASSOC);
				$idEndereco = $rowEndereco["ID_END"];
			}
		} else {
			echo 0;
			$mysqli->close();
			exit;
		}
	}

	if (mysqli_query($mysqli,
		"UPDATE
			CLIENTE
		SET
			ENDERECO_ID_END = '" . $idEndereco . "'
		WHERE
			NOME_CLI = '" . $nome . "'
		AND
			LOGIN_CLI = '" . $usuario . "'
		AND
			STATUS_CLI = '1'
		AND
			SENHA_CLI = '" . $senha . "'
		AND
			EMAIL_CLI = '" . $email . "'")) {
		if ($mysqli->affected_rows == 0) {
			$mysqli->rollback();
			echo 0;
			$mysqli->close();
			exit;
		} else {
			if (mysqli_query($mysqli,
				"UPDATE
					CONTATO
				SET
					ENDERECO_ID_END = '" . $idEndereco . "'
				WHERE
					DDD_CONTATO = '" . $ddd . "'
				AND
					TIPO_CONTATO = '1'
				AND
					NUMERO_CONTATO = '" . $celular . "'")) {
				if ($mysqli->affected_rows > 0) {
					$mysqli->commit();
					echo 1;
					$mysqli->close();
					exit;
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

?>