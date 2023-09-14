<tr valign="middle">
	<td valign="middle">
		 <?php echo $subcategoria; ?>
	</td>
	<td>
		<a href="<?php echo URL::base().'painel/subcategorias/editar/'.$codcategoria.'/'.$codsubcategoria.'/'; ?>" class="btn btn-info" title="Editar Categoria"><i class="fa fa-edit"></i></a>
		<a href="<?php echo URL::base().'painel/subcategorias/excluir/'.$codcategoria.'/'.$codsubcategoria.'/'; ?>" class="btn btn-danger" title="Excluir Categoria"><i class="fa fa-trash-o"></i></a>
	</td>
</tr>
