<tr valign="middle">
	<td valign="middle">
		 <?php echo $nome; ?>
	</td>
	<td>
		<a href="<?php echo URL::base().'painel/campoForm/lista/'.$codform.'/'; ?>" class="btn btn-warning" title="Adicionar campo"><i class="fa fa-columns"></i></a>
		<a href="<?php echo URL::base().'painel/codeform/'.$codform.'/'; ?>" class="btn btn-default" title="Ver Código php"><i class="fa fa-code"></i></a>
		<a href="<?php echo URL::base().'painel/formularios/editar/'.$codform.'/'; ?>" class="btn btn-info" title="Editar Formulário"><i class="fa fa-edit"></i></a>
		<a href="<?php echo URL::base().'painel/formularios/excluir/'.$codform.'/'; ?>" class="btn btn-danger" title="Excluir Formulário"><i class="fa fa-trash-o"></i></a>
	</td>
</tr>
