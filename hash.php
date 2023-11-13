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
	$email = $_POST['email'];
	$senha = $POST['senha'];
	
	$sql_code = "SELECT * FROM senhas WHERE email = "$email" LIMIT 1";
	$sql_exec = $mysql->query($sql_code) or die($mysqli->error);
	
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