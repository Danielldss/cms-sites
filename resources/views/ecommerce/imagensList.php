
<tr>
	<td>
		<a href="<?php echo $imagem; ?>" class="fancybox-button" data-rel="fancybox-button">
		<img class="img-responsive" src="<?php echo $imagem; ?>" alt="">
		</a>
		<input type="hidden" name="produto[imagem][<?php echo $codproduto; ?>][codimg]" value="<?php echo $codimg; ?>">
		<input type="hidden" name="produto[imagem][<?php echo $codproduto; ?>][imagem]" value="<?php echo $imagem; ?>">
	</td>
	<td>
		<input type="text" class="form-control" name="produto[imagem][<?php echo $codproduto; ?>][title]" value="<?php echo $title; ?>">
	</td>
	<td>
		<label>
		<input type="radio" name="produto[imagem][<?php echo $codproduto; ?>][<?php echo $codimg; ?>][tipo]" value="N" <?php echo ($tipo == 'N')? 'checked': ''; ?>>
		</label>
	</td>
	<td>
		<label>
		<input type="radio" name="produto[imagem][<?php echo $codproduto; ?>][<?php echo $codimg; ?>][tipo]" value="P" <?php echo ($tipo == 'P')? 'checked': ''; ?>>
		</label>
	</td>
	<td>
		<label>
		<input type="radio" name="produto[imagem][<?php echo $codproduto; ?>][<?php echo $codimg; ?>][tipo]" value="C" <?php echo ($tipo == 'C')? 'checked': ''; ?>>
		</label>
	</td>
	<td>
		<a href="<?php echo URL::base(true).'ecommerce/produtoDelImagem/'.$codproduto.'/'.$codimg; ?>" class="btn default btn-sm">
		<i class="fa fa-times"></i> Remove </a>
	</td>
</tr>
