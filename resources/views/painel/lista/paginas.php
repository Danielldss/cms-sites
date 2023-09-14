<tr valign="middle">
	<td valign="middle">
		 <?php echo $pagina; ?>
	</td>
	<td>
		<a href="<?php echo URL::base().'painel/categorias/lista/'.$codpagina.'/'; ?>" class="btn btn-primary" title="Adicionar Categoria / Subcategoria"><i class="fa fa-plus"></i></a>
		<a href="<?php echo URL::base().'painel/campoGenerico/lista/'.$codpagina.'/'; ?>" class="btn btn-warning" title="Adicionar campo genérico"><i class="fa fa-columns"></i></a>
		<a href="<?php echo URL::base().'painel/paginas/editar/'.$codpagina.'/'; ?>" class="btn btn-info" title="Editar Página"><i class="fa fa-edit"></i></a>
		<a href="<?php echo URL::base().'painel/paginas/excluir/'.$codpagina.'/'; ?>" class="btn btn-danger" title="Excluir Página"><i class="fa fa-trash-o"></i></a>
	</td>
</tr>
