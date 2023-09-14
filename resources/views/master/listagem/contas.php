<tr>
	<td>
		<?php if($logo != ''){?>
		 	<img src="<?php echo $logo; ?>" height="50">
		 <?php }else{?>
		 	Sem imagem
		 <?php } ?> 
	</td>
	<td>
		 <?php echo $dominio; ?>
	</td>
	<td>
		 <?php echo $host; ?>
	</td>
	<td>
		<?php echo $banco; ?>
	</td>
	<td>
		 <?php echo $usuario; ?>
	</td>
	<td>
		 <?php echo $senha; ?>
	</td>
	<td>
		<a href="<?php echo URL::base().'master/listausuarios/'.$codconta; ?>" class="btn btn-primary" title="Usuário"><i class="fa fa-user"></i></a>
		<a href="<?php echo URL::base().'master/ftp/'.$codconta; ?>" class="btn default" title="FTP"><i class="fa fa-server"></i></a>
		<a href="<?php echo URL::base().'master/editarconta/'.$codconta; ?>" class="btn btn-info" title="Editar"><i class="fa fa-edit"></i></a>
		<a href="<?php echo URL::base().'master/excluiconta/'.$codconta; ?>" class="btn btn-danger" title="Excluir"><i class="fa fa-trash-o"></i></a>
	</td>
</tr>
