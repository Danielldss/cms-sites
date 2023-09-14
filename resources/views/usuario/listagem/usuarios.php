<tr>
	<td>
		 <?php echo $nome; ?>
	</td>
	<td>
		 <?php echo $email; ?>
	</td>
	<td>
		<?php echo $acesso; ?>
	</td>
	<td>
		<a href="<?php echo URL::base(true).'usuario/editausuario/'.$codconta.'/'.$codusu.'/'; ?>" class="btn btn-info" title="Editar Conta"><i class="fa fa-edit"></i></a>
		<a href="<?php echo URL::base(true).'usuario/excluiusuario/'.$codconta.'/'.$codusu.'/'; ?>" class="btn btn-danger" title="Excluir Conta"><i class="fa fa-trash-o"></i></a>
	</td>
</tr>
