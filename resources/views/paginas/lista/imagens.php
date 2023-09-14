
<tr class="template-download" valign="middle" id="arrayorder_<?php echo $codimage; ?>">
	<td valign="middle">
		<span class="preview">
			<a href="<?php echo $url.$imagem; ?>" data-gallery><img src="<?php echo $url.$imagem; ?>" width="90" /></a>
		</span>
	</td>
	<td valign="middle">
	    <a href="<?php echo URL::base(true).'pagina/delimg/'.$codpagina.'/'.$codconteudo.'/'.$codimage.'/'; ?>" class="btn red delete btn-sm" >
		    <i class="fa fa-trash-o"></i>
		    <span>Excluir</span>
	    </a>
	    <a href="<?php echo URL::base(true).'pagina/crop/'.$codpagina.'/'.$codconteudo.'/'.$codimage.'/'; ?>" class="btn blue edit btn-sm" >
		    <i class="fa fa-pencil-square-o"></i>
		    <span>Editar Imagem</span>
	    </a>
	</td>
</tr>
