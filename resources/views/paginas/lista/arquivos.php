
<tr class="template-download" valign="middle">
	<td valign="middle">
		<span class="preview">
			<a href="<?php echo $url.$arquivo; ?>" target="_blank" class="btn default yellow-stripe"><i class="fa fa-file-archive-o"></i> <?php echo $nome; ?></a>
		</span>
	</td>
	<td valign="middle">
	    <a href="<?php echo URL::base(true).'pagina/delarq/'.$codpagina.'/'.$codconteudo.'/'.$codarquivo.'/'; ?>" class="btn red delete btn-sm" >
		    <i class="fa fa-trash-o"></i>
		    <span>Excluir</span>
	    </a>
	    <a href="<?php echo URL::base(true).'pagina/sendarq/'.$codpagina.'/'.$codconteudo.'/'.$codarquivo.'/'; ?>" class="btn blue delete btn-sm" >
		    <i class="fa fa-envelope"></i>
		    <span>Enviar via e-mail</span>
	    </a>
	</td>
</tr>
