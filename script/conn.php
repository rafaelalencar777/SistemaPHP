<?php
	$servername = "localhost";
	$database = "baselocal_teste";
	$username = "root";
	$password = "spfc2017";

	// criar a conexão
	$conn = mysqli_connect($servername, $username, $password, $database);

	// checar conexão
	if (!$conn) {

	    die("Conexão falhou: " . mysqli_connect_error());

	}
	echo "Conexão bem sucedida";
?>