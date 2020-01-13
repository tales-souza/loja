
<?php require_once("cabecalho.php"); 
 require_once("banco-categoria.php");
 require_once("banco-produto.php");



 $id = $_GET['id'];
 $produto = buscaProduto($conexao, $id); 
 $categorias = listaCategorias($conexao);
 $usado = $produto['usado'] ? "checked='checked'" :"";

  ?>
	
	<h1> Alteração de Produto </h1>

	<form method="post" name ="form" id="form" action="altera-produto.php" onSubmit="return validaDescricao();">


	<?php

		include 'produto-formulario-base.php';

	?>

	
			<tr>
			<td > <input class="btn btn-primary" type="submit" value="Alterar"> </td>

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
