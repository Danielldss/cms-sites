
<form method="post" action="<?php echo URL::base(true).'ecommerce/pedidoEditar/'.$codpedido.'/'; ?>">
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

			</td>
			<td>
                <?php
                switch ($status){
                    case 'refunded':
                        $statusped = 'Cancelado';
                        break;
                    case 'processing':
                        $statusped = 'Aguardando Pagamento';
                        break;
                    case 'paid':
                        $statusped = 'Pago';
                        break;
                    case 'delivery':
                        $statusped = 'Enviado para entrega';
                        break;
                    case 'delivered':
                        $statusped = 'Entregue';
                        break;
                }

                switch ($frete) {
                    case '41211':
                        $servico = 'PAC';
                        break;
                    case '41106':
                        $servico = 'PAC';
                        break;
                    case '04014':
                        $servico = 'SEDEX';
                        break;
                    case '40010':
                        $servico = 'SEDEX';
                        break;
                    case '1':
                        $servico = 'BRASPRESS';
                        break;
                    case '0':
                        $servico = 'Retirar na loja';
                        break;
                    default:
                        $servico = 'PAC';
                        break;
                }

                ?>

                <p><strong>Status:</strong> <?php echo $statusped; ?></p>
                <p><strong>Tipo de Frete:</strong> <?php echo $servico; ?></p>
                <p><strong>Cód. Rastreio:</strong> <?php echo $codrastreamento; ?></p>
			</td>
			</div>
		</tr>

		<tr>
			<td colspan="6">
				<table class="table table-bordered table-hover">
					<thead>
						<tr role="row" class="heading">
							<th width="8%">
								 Produto
							</th>
							<th width="8%">
								 Variação
							</th>
							<th width="25%">
								 Imagem
							</th>
							<th width="8%">
								Quantidade
							</th>
							<th width="10%">
								Valor
							</th>
						</tr>
					</thead>
					<tbody>
						<?php echo $produtos; ?>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
