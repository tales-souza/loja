<?php require_once("cabecalho.php"); 
 require_once("banco-categoria.php");
 require_once("logica-usuario.php");

 $categorias = listaCategorias($conexao);

 verificaUsuario();
  ?>
	
	<h1> Formulário de Produto </h1>

	<form method="post" name ="form" id="form" action="adiciona-produto.php" onSubmit="return validaDescricao();">

	<?php

		include 'produto-formulario-base.php';

	?>


			<tr>
			<td > <input class="btn btn-primary" type="submit" value="Enviar"> </td>

			</tr>
		</table>

	</form>
		
	<span id="msg"></span>




	<script type="text/javascript">
	function validaDescricao(){
		if (document.form.descricao.value.length < 5 )
{
alert( "É necessario preencher o campo MENSAGEM com mais de 5 caracteres!" );
document.form.descricao.focus();
return false;
}
return true;
	}


</script>
<?php include("rodape.php");  ?>
