<tr valign="middle">
	<td valign="middle">
		 <?php echo $opcao; ?>
	</td>
	<td valign="middle">
		 <?php echo $votos; ?>
	</td>
	<td>
		<a href="<?php echo URL::base().'painel/opcoes/editar/'.$codenquete.'/'.$codopcao.'/'; ?>" class="btn btn-info" title="Editar Campo"><i class="fa fa-edit"></i></a>
		<a href="<?php echo URL::base().'painel/opcoes/excluir/'.$codenquete.'/'.$codopcao.'/'; ?>" class="btn btn-danger" title="Excluir Campo"><i class="fa fa-trash-o"></i></a>
	</td>
</tr>
