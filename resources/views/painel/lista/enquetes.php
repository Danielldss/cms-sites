<tr valign="middle">
	<td valign="middle">
		 <?php echo $pergunta; ?>
	</td>
	<td>
		<a href="<?php echo URL::base().'painel/opcoes/lista/'.$codenquete.'/'; ?>" class="btn btn-primary" title="Adicionar Opções"><i class="fa fa-plus"></i></a>
		<a href="<?php echo URL::base().'painel/enquetes/editar/'.$codenquete.'/'; ?>" class="btn btn-info" title="Editar Enquete"><i class="fa fa-edit"></i></a>
		<a href="<?php echo URL::base().'painel/enquetes/excluir/'.$codenquete.'/'; ?>" class="btn btn-danger" title="Excluir Enquete"><i class="fa fa-trash-o"></i></a>
	</td>
</tr>
