<?php 
require_once ("banco-usuario.php");
require_once ("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario == null){
	$_SESSION["danger"] = "Uusuário ou Senha inválidos!";
	header("Location: index.php");
}else{

	$_SESSION["success"] = "Usuário Logado com Sucesso";
	logaUsuario($usuario["email"]);
	
	header("Location: index.php?login=1");
}

die();