<?php
	$cpf = $_POST['cpf'];
	$login = $_POST['cpf'];
	$senha = md5($_POST['senha']);
	$nomeCompleto = $_POST['nomeCompleto'];
	$email = $_POST['email'];
	$campus = $_POST['campus'];
	$curso = $_POST['curso'];
	$turma = $_POST['turma'];
	$matricula = $_POST['matricula'];
	$periodo = $_POST['periodo'];
	$confSenha = $_POST['confSenha'];
	$acesso = $_POST['acesso'];

	require_once("conexao.php");

	$sql = "insert into usuario (cpf, login, senha, nomeCompleto, email, campus, curso, turma, periodo, matricula, confSenha, acesso) values(?,?,?,?,?,?,?,?,?,?,?,?)";

	$sqlPrep = $conexao->prepare($sql);

	$sqlPrep->bind_param("ssssssssssss", $cpf, $login, $senha, $nomeCompleto, $email, $campus, $curso, $turma, $periodo, $matricula, $confSenha, $acesso);

	$sqlPrep->execute();

	header('location:index 1.php');
?>