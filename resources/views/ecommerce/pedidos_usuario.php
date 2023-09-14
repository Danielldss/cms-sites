
<table class="table table-bordered table-hover">
	<thead>
		<tr role="row" class="heading">
			<th width="10%">
				 Num. Pedido
			</th>
			<th width="10%">
				 Data do pedido
			</th>
			<th width="8%">
				 Data de alteração
			</th>
			<th width="10%">
				 Resumo
			</th>
			<th width="10%">
				 Status
			</th>
			<th width="1%">
				Ações
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<?php echo $sessao; ?>
			</td>
			<td>
				<?php echo $dtpedido; ?>
			</td>
			<td>
				<?php echo $dtalteracao; ?>
			</td>
			<td>
				<p><strong>Subtotal:</strong> <?php echo $subtotal; ?></p>
				<p><strong>Frete:</strong> <?php echo $valfrete; ?></p>
				<p><strong>Total:</strong> <?php echo $total; ?></p>
				<p><strong>Total Recebido:</strong> <?php echo $totalRecebido; ?></p>
				<p><strong>Pagamento:</strong> <?php echo $pagamento; ?></p>
				<p><strong>Desconto:</strong> <?php echo $desconto; ?></p>
			</td>
			<td>
				<?php echo $status; ?>
			</td>
			<td>
				<a href="<?php echo URL::base(true).'ecommerce/pedidoEditar/'.$codpedido.'/'; ?>" class="btn default btn-sm">
					<i class="fa fa-pencil"></i> Ver / Editar
				</a>
			</td>
		</tr>

	</tbody>
</table>
