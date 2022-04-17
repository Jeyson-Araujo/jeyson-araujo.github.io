<?php
	$host = "localhost";
	$user = "root";
	$psw = "";
	$bd = "tcc";

	$conexao = new mysqli($host, $user, $psw, $bd);
	
	if(!$conexao){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "conexao realizada com sucesso";
	}
?>