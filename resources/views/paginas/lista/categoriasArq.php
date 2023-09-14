<tr valign="middle">
	<td valign="middle">
		 <?php echo $categoria; ?>
	</td>
	<td>
		<a href="<?php echo URL::base().'painel/subcategorias/lista/'.$codcategoria.'/'; ?>" class="btn btn-primary" title="Adicionar Subcategoria"><i class="fa fa-plus"></i></a>
		<a href="<?php echo URL::base().'painel/categorias/editar/'.$codpagina.'/'.$codcategoria.'/'; ?>" class="btn btn-info" title="Editar Categoria"><i class="fa fa-edit"></i></a>
		<a href="<?php echo URL::base().'painel/categorias/excluir/'.$codpagina.'/'.$codcategoria.'/'; ?>" class="btn btn-danger" title="Excluir Categoria"><i class="fa fa-trash-o"></i></a>
	</td>
</tr>
