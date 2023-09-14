<tr>
	<td>
		<?php echo $nome; ?>
	</td>
	<td>
		<?php echo $produtos; ?>
	</td>
	<td>
		 R$<?php echo $total; ?>
	</td>
	<td>
		 <?php echo $dtpedido; ?>
	</td>
	<td>
		<a href="<?php echo URL::base(true).'ecommerce/pedidoEditar/'.$codpedido.'/'; ?>" class="btn default btn-xs green-stripe">
		Visualizar </a>
	</td>
</tr>