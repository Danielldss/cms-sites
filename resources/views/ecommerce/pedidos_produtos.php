
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
      <th width="1%">
        Alterar Status
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
        <select class="form-control" name="status">
          <?php
          switch ($status){
            case 'refunded':
              $refunded = 'selected';
            break;
            case 'processing':
              $processing = 'selected';
            break;
            case 'paid':
              $paid = 'selected';
            break;
            case 'delivery':
              $delivery = 'selected';
            break;
            case 'delivered':
              $delivered = 'selected';
            break;
          };

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
          <option value="refunded" <?php echo @$refunded; ?>>Cancelado</option>
          <option value="processing" <?php echo @$processing; ?>>Aguardando Pagamento</option>
          <option value="paid" <?php echo @$paid; ?>>Pago</option>
          <option value="delivery" <?php echo @$delivery; ?>>Enviado para entrega</option>
          <option value="delivered"  <?php echo @$delivered; ?>>Entregue</option>
        </select>
        <br />
        <input type="text" class="form-control" name="codrastreamento" placeholder="Cód Rastreamento" value="<?php echo $codrastreamento; ?>" />
        <input type="hidden" class="form-control" name="nome" placeholder="Cód Rastreamento" value="<?php echo $nome; ?>" />
        <input type="hidden" class="form-control" name="email" placeholder="Cód Rastreamento" value="<?php echo $email; ?>" />
        <input type="hidden" class="form-control" name="sessao" placeholder="Cód Rastreamento" value="<?php echo $sessao; ?>" />
        <input type="text" class="form-control" disabled='disabled' name="frete" value="Frete: <?php echo $servico; ?>" />
      </td>
      </div>
      <td>
        <button type="submit" class="btn default btn-sm">
          <i class="fa fa-check"></i> Salvar
        </button>
      </td>
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
