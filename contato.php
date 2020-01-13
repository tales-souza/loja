<?php
require_once('cabecalho.php');
?>


<table class="table">
	<form method="post" action="envia-email.php">

	<tr>
		<td>
			Seu Nome: 
			
		</td>

			


		<td>
			<input type="text" name="nome" class="form-control">
			
		</td>
		
	</tr>

	<tr>
		<td>
			Seu Email: 
		</td>

		<td>
			 <input type="email" name="email" class="form-control">
		</td>
		
	</tr>


	<tr>
		<td>
			Sua Mensagem:
			
		</td>

		<td>
			<textarea class="form-control">  </textarea>
		</td>
		
	</tr>

	<tr>
		<td> <input class="btn btn primary" type="submit" > </td>
	</tr>


	</form>
</table>










<?php
require_once('rodape.php');