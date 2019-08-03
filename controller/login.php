<?php

	include("factoryConn.php");

	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];

	$query = mysql_query("DESC mincn694_pizzafast.USUARIO");
	echo mysql_fetch_array($query);

?>