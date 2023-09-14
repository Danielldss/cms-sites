<tr valign="middle">
	<td valign="middle">
		 <?php echo $nome; ?>
	</td>
	<td>
		<a href="<?php echo URL::base().'painel/campoGenerico/editar/'.$codpagina.'/'.$codcampo.'/'; ?>" class="btn btn-info" title="Editar Campo"><i class="fa fa-edit"></i></a>
		<a href="<?php echo URL::base().'painel/campoGenerico/excluir/'.$codpagina.'/'.$codcampo.'/'; ?>" class="btn btn-danger" title="Excluir Campo"><i class="fa fa-trash-o"></i></a>
	</td>
</tr>
