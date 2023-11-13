<?php
	if(isset($_POST['email']))
	{
		include('conexão.php');
		
		$email = $_POST['email'];
		$senha = password_hash(S_POST['senha'], PASSWORD_DEFAULT);
		
		$mysqli->query("INSERT INTO senhas(email, senha) VALUES('$email', '$senha')");
	}
?>

















<?php

if(issset($_POST['email']))
{
	include("config.php");
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$sql_code = "SELECT * FROM senhas WHERE email = "$email" LIMIT 1";
	$sql_exec = $mysqli->query($sql_code) or die($mysqli->error);
	
	$usuario = $sql_exec->fetch_assoc();
	
	if(password_verify($senha, $usuario['senha']))
	{
		echo "Usuário logado!";
	}
	else
	{
		echo "Falha ao logar. Senha ou email incorretos!";
	}
}


?>