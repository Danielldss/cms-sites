<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php echo $menu; ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1><?php echo $nome; ?> <small>compras do usuário</small></h1>
				</div>
				<!-- END PAGE TITLE -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="<?php echo URL::base(true).'ecommerce/'; ?>">Home</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="<?php echo URL::base(true).'ecommerce/'; ?>">E-commerce</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="<?php echo URL::base(true).'ecommerce/usuarios/'; ?>">Usuários</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#"><?php echo $nome; ?></a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal form-row-seperated" id="frmusuario" method="post" action="#" enctype="multipart/form-data">

						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-basket font-green-sharp"></i>
									<span class="caption-subject font-green-sharp bold uppercase">Compra Manual </span>
								</div>
								<div class="actions btn-set">
									<a type="button" class="btn btn-default btn-circle" href="<?php echo URL::base(true).'ecommerce/usuarios/'; ?>"><i class="fa fa-angle-left"></i> Voltar</a>
								</div>
							</div>
							<div class="portlet-body">
								<?php echo $retorno; ?>
								<div class="tabbable">
									<div class="tab-content no-space">
										<div class="form-body">

											<div class="form-group">

												<label class="col-md-2 control-label">Usuário / Cliente:
												</label>
												<div class="col-md-4">
													<input type="text" name="nome" class="form-control" value="<?php echo $nome?>" disabled >
													<input type="hidden" class="form-control" name="codusu" value="<?php echo $codusu; ?>">
												</div>

												<label class="col-md-2 control-label">Bônus acumulados:
												</label>
												<div class="col-md-4">
													<input type="text" name="pontos" disabled class="form-control" placeholder="1" value="<?php echo $pontos; ?>">
												</div>
											</div>
											<hr />

											<div class="form-group">
												<label class="col-md-1 control-label">Produto:</label>
												<div class="col-md-3">
													<select name="produto[0]" class="form-control" id="produto" required>
														<option value="">Selecione o produto</option>
														<?php echo $produtos; ?>
													</select>
													<input type="hidden" class="form-control" id="qtdarr" name="qtdarr" value="0">
												</div>

												<label class="col-md-1 control-label">Quantidade:</label>
												<div class="col-md-2">
													<input type="text" name="quantidade[0]" id="quantidade" class="form-control" placeholder="1" value="1">
												</div>
												<label class="col-md-2 control-label">Valor do produto:</label>
												<div class="col-md-1">
													<input type="text" id="Showvalor" class="form-control" data-mask="decimal" disabled value="0,00">
													<input type="hidden" name="valor[0]" id="valor" >
													<input type="hidden" name="nomproduto[0]" id="nomproduto">
												</div>
												<label class="col-md-1 control-label">Subtotal:</label>
												<div class="col-md-1">
													<input type="text" id="Showsubtotal" class="form-control" data-mask="decimal" disabled value="0,00">
													<input class="valorTotalPrd" type="hidden" name="valorTotalPrd[0]" id="valorTotalPrd" >
												</div>

											</div>

										</div>
									</div>
								</div>
							</div>
							<hr />
							<div class="portlet-body">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-2 control-label">Utilizar Bônus?</label>
										<div class="col-md-1">
											<input type="checkbox" class="form-control" id="usarbonus" name="usarbonus" value="S" />
										</div>
										<label class="col-md-2 control-label">Valor do bônus a ser utilizado:</label>
										<div class="col-md-2">
											<input type="text" name="bonus" id="inputbonus" data-mask="decimal" class="form-control" placeholder="0,00" readonly>
										</div>
									</div>
								</div>
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-2 control-label">Desconto:</label>
										<div class="col-md-2">
											<input type="text" name="desconto" id="inputdesconto" data-mask="decimal" class="form-control" placeholder="0,00" >
										</div>
									</div>
								</div>
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-2 control-label">Total:</label>
										<div class="col-md-2">
											<input type="text" name="total" disabled data-mask="decimal" class="form-control" placeholder="0,00" >
											<input type="hidden" name="totalPedido">
										</div>
									</div>
								</div>
							</div>
							<div class="portlet-title">
								<div class="actions btn-set">
									<button class="btn blue-haze btn-circle" type="button" onclick="addprd();"><i class="fa fa-plus"></i> Adicionar produto</button>
									<button class="btn green-haze btn-circle" type="submit"><i class="fa fa-check"></i> Finalizar Pedido</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		2015 © LigDoctor CMS.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/select2.min.js"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo URL::base(true); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/scripts/datatable.js"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/pages/scripts/ecommerce-products-edit.js"></script>
<script src="<?php echo URL::base(); ?>assets/global/scripts/meiomask.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>

function addprd(){

	var arr = Number($('#qtdarr').val());
	var numarr = arr + 1;
	var html = '<hr /><div class="tab-content no-space">'+
					'<div class="form-body">'+
						'<div class="form-group">'+
							'<label class="col-md-1 control-label">Produto:</label>'+
							'<div class="col-md-3">'+
								'<select name="produto['+numarr+']" class="form-control" id="produto'+numarr+'" required>'+
									'<option value="">Selecione o produto</option><?php echo $produtos; ?>'+
								'</select>'+
							'</div>'+

							'<label class="col-md-1 control-label">Quantidade:</label>'+
							'<div class="col-md-2">'+
								'<input type="text" id="quantidade'+numarr+'" name="quantidade['+numarr+']" class="form-control" placeholder="1" value="1">'+
							'</div>'+
							'<label class="col-md-2 control-label">Valor do produto:</label>'+
							'<div class="col-md-1">'+
								'<input type="text" class="form-control" id="Showvalor'+numarr+'" data-mask="decimal" disabled>'+
								'<input type="hidden" name="valor['+numarr+']" id="valor'+numarr+'" >'+
								'<input type="hidden" name="nomproduto['+numarr+']" id="nomproduto'+numarr+'">'+
							'</div>'+
							'<label class="col-md-1 control-label">Subtotal:</label>'+
							'<div class="col-md-1">'+
								'<input type="text" id="Showsubtotal'+numarr+'" class="form-control"  data-mask="decimal" disabled>'+
								'<input class="valorTotalPrd" type="hidden" name="valorTotalPrd['+numarr+']" id="valorTotalPrd'+numarr+'" >'+
							'</div>'+

						'</div>'+

					'</div>'+
				'</div>';

	$('.tabbable').append(html);
	$('#qtdarr').val(numarr);
	$('.decimal').attr('data-mask', 'decimal').trigger('change');

	$('#produto'+numarr).select2().on('change', function() {
		var opt = this.options[this.selectedIndex];
		var valor = this.options[this.selectedIndex].getAttribute('data-valor');
		var produto = this.options[this.selectedIndex].getAttribute('data-produto');
		$("#valor"+numarr).val(valor).trigger('change');
		$("#nomproduto"+numarr).val(produto).trigger('change');
		$('#Showvalor'+numarr).val(valor).trigger('change');
		$('#Showsubtotal'+numarr).val(valor).trigger('change');
		$('#quantidade'+numarr).val(1).trigger('change');
	}).trigger('change');

	$('#quantidade'+numarr).on('change', function() {
		var valor = $('#valor'+numarr).val();
		var quant = $('#quantidade'+numarr).val();
		var subtotal = valor*quant;
		$('#Showsubtotal'+numarr).val(subtotal).trigger('change');
		$('#valorTotalPrd'+numarr).val(subtotal).trigger('change');
	});

	$('input[data-mask]').each(function() {
    	var input = $(this);
    	input.on('change keyup blur', function() {
        	input.setMask(input.data('mask'));
		});
	});
	$('input.valorTotalPrd').on('change', function() {
		valorTotal();
	});

	$('#inputbonus').on('change', function() {
		valorTotal();
	});

	$('#inputdesconto').on('change', function() {
		valorTotal();
	});
}

function valorTotal() {
	var valor = Number(0);
	var valorbonus = Number(0);
	var valordesconto = Number(0);
	$('input.valorTotalPrd').each(function() {
		valor += parseInt($(this).val());
	});

	//valor enviado para o backend
	$('input[name="totalPedido"]').val(valor).trigger('change');


	if ($('#usarbonus').prop('checked')) {
		var valorbonus = $('#inputbonus').val();
		valorbonus = parseInt(valorbonus.replace(/[^\w\s]/gi, ''));
	}

	if($('#inputdesconto').val()){
		var valordesconto = $('#inputdesconto').val();
		valordesconto = parseInt(valordesconto.replace(/[^\w\s]/gi, ''));
	}

	valor = valor - valorbonus;
	valor = valor - valordesconto;
	//valor para mostrar apenas no front
	$('input[name="total"]').val(valor).trigger('change');
}

jQuery(document).ready(function(e) {
	$('#produto').select2().on('change', function() {
		var opt = this.options[this.selectedIndex];
		var valor = this.options[this.selectedIndex].getAttribute('data-valor');
		var produto = this.options[this.selectedIndex].getAttribute('data-produto');
		$("#valor").val(valor).trigger('change');
		$("#nomproduto").val(produto).trigger('change');
		$('#Showvalor').val(valor).trigger('change');
		$('#Showsubtotal').val(valor).trigger('change');
		$('#quantidade').val(1).trigger('change');

		if ($('#usarbonus').prop('checked')) {
			$('#usarbonus').click();
		}
	}).trigger('change');

	$('#usarbonus').on('change', function() {
		var valor = $(this).val();
		if ($(this).prop('checked')) {
			$('#inputbonus').removeAttr('readonly');
		} else {
			$('#inputbonus').attr('readonly', 'readonly');
			$('#inputbonus').val('').trigger('change');
		}
	});

	$('#inputbonus').on('change', function() {
		valorTotal();
	});

	$('#inputdesconto').on('change', function() {
		valorTotal();
	});

	$('#quantidade').on('change', function() {
		var valor = $('#valor').val();
		var quant = $('#quantidade').val();
		var subtotal = valor*quant;
		$('#Showsubtotal').val(subtotal).trigger('change');
		$('#valorTotalPrd').val(subtotal).trigger('change');
	});

	$('input.valorTotalPrd').on('change', function() {
		valorTotal();
	});

	$('input[data-mask]').each(function() {
    	var input = $(this);
    	input.on('change keyup blur', function() {
        	input.setMask(input.data('mask'));
		});
	});

	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features

});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
