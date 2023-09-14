
<tr valign="middle">
	<td valign="middle">
		 <?php echo $nome; ?>
	</td>
	<td valign="middle">
		 <?php echo $email; ?>
	</td>
	<td valign="middle">
		 <?php echo $comentario; ?>
	</td>
	<td>
		<?php if($ativo == 'S'){?>
			<a href="<?php echo URL::base(true).'pagina/statusComentario/'.$codpagina.'/'.$codconteudo.'/'.$codcomentario.'/N'; ?>" class="btn btn-warning" title="Reprovar"><i class="fa fa-ban"></i></a>
		<?php }else{?>
			<a href="<?php echo URL::base(true).'pagina/statusComentario/'.$codpagina.'/'.$codconteudo.'/'.$codcomentario.'/S'; ?>" class="btn btn-success" title="Aprovar"><i class="fa fa-check"></i></a>
		<?php }?>
		<a href="<?php echo URL::base(true).'pagina/excluirComentario/'.$codpagina.'/'.$codconteudo.'/'.$codcomentario.'/'; ?>" class="btn btn-danger" title="Excluir"><i class="fa fa-trash-o"></i></a>
	</td>
</tr>
