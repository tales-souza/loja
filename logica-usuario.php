<?php
session_start();
function usuarioEstaLogado() {
	return isset($_SESSION["usuario-logado"]);
}

function verificaUsuario() {
	if(!usuarioEstaLogado()) {
		$_SESSION["danger"] = "Você não tem acesso a esta funcionalidade";
		 header("Location:  index.php");
		 die();
	}
}

function usuarioLogado() {
	return $_SESSION["usuario-logado"];
}

function logaUsuario($email){
	
	$_SESSION["usuario-logado"] = $email;
}

function logout(){
	session_destroy();
	session_start();
}