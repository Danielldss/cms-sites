
<tr>
	<td>
		<a href="<?php echo $imagem; ?>" class="fancybox-button" data-rel="fancybox-button">
		<img class="img-responsive" src="<?php echo $imagem; ?>" alt="">
		</a>
		<input type="hidden" name="servico[imagem][<?php echo $codservico; ?>][codimg]" value="<?php echo $codimg; ?>">
		<input type="hidden" name="servico[imagem][<?php echo $codservico; ?>][imagem]" value="<?php echo $imagem; ?>">
	</td>
	<td>
		<input type="text" class="form-control" name="servico[imagem][<?php echo $codservico; ?>][title]" value="<?php echo $title; ?>">
	</td>

	<td>
		<a href="<?php echo URL::base(true).'servicos/servicoDelImagem/'.$codservico.'/'.$codimg; ?>" class="btn default btn-sm">
		<i class="fa fa-times"></i> Remove </a>
	</td>
</tr>
