<table class="table">
			<tr>
			<input type="text" name="id" value="<?=$produto['id']?>">
			<td> Nome: </td> 
			<td> <input  value ="<?= $produto['nome'] ?>" class="form-control" id="nome" type="text" name="nome" required> <td/>
			</tr>
			<tr> 
			
			<td> Preco: </td>
			<td><input  value ="<?= $produto['preco'] ?>" class="form-control" id="preco" type="number" name="preco" required=""> <br> </td>

			</tr>


			<tr> 
			
			<td> Descrição: </td>
			<td><textarea    class="form-control" id="descricao" type="text" name="descricao" > <?= $produto['descricao'] ?>  </textarea> </td>

			</tr>

			<tr>
				<td></td>
				<td> <input type="checkbox" name="usado" <?=$usado?>value="true">Usado </td>
			</tr>

			<tr>
				<td> Categoria </td>
				<td>
					<select name="categoria_id" class="form-control">
					<?php foreach ($categorias as $categoria ) :
						$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
						$selecao = $essaEhACategoria ? "selected = 'selected'": "";
						 ?>
						<option value="<?=$categoria['id']?>"  <?=$selecao?>>
							<?=$categoria['nome']?>

							<br>
						</option>
					<?php endforeach ?>
					</select>
				</td>

			</tr>
