<?php 
error_reporting(E_ALL ^ E_NOTICE);
include 'mostra-alerta.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/loja.css">
	<title> Principal</title>
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top" style= "background-color: #0351C1" >
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Minha Loja</a>
			</div>

			<div>
				<ul class="nav navbar-nav">
				<li><a href="produto-formulario.php"> Cadastrar Produtos</a></li>
				<li><a href="produto-lista.php"> Lista de Produtos </a></li>
				<li><a href="contato.php"> Contato </a></li>


				</ul>
			</div>


		</div>
	</div>


<div class="principal">
	<?php
	mostraAlerta("success");
	mostraAlerta("danger");
	?>




