<?php
	include_once "/script/conn.php";

	echo $conn;

	//criar tabela no banco
	$query = "CREATE TABLE `baselocal_teste`.`user` ( `user` INT(5) NOT NULL , `nome` VARCHAR(30) NOT NULL , `email` VARCHAR(40) NOT NULL , `password` VARCHAR(40) NOT NULL ) ENGINE = InnoDB;";
	$result = mysql_query($query,$conn);
	
	if(!$result){
		echo "<br>não deu certo";
	}

?>