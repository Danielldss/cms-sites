<tr valign="middle">
	<td valign="middle">
		 <?php echo $label; ?>
	</td>
	<td>
		<a href="<?php echo URL::base().'painel/campoForm/editar/'.$codform.'/'.$codcampo.'/'; ?>" class="btn btn-info" title="Editar Campo"><i class="fa fa-edit"></i></a>
		<a href="<?php echo URL::base().'painel/campoForm/excluir/'.$codform.'/'.$codcampo.'/'; ?>" class="btn btn-danger" title="Excluir Campo"><i class="fa fa-trash-o"></i></a>
	</td>
</tr>
