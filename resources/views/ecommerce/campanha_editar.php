<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php	echo $menu; ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">

			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Editar Campanha <small>Editar campanha</small></h1>
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
					<a href="#">Editar campanha</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal form-row-seperated" method="post" action="<?php echo URL::base(true).'ecommerce/campanhaEdit/'.$codpromo; ?>" enctype="multipart/form-data">
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-basket font-green-sharp"></i>
									<span class="caption-subject font-green-sharp bold uppercase">Editar Campanha </span>
								</div>
								<div class="actions btn-set">
									<a type="button" class="btn btn-default btn-circle" href="<?php echo URL::base(true).'ecommerce/campanhas/'; ?>"><i class="fa fa-angle-left"></i> Voltar</a>
									<button class="btn green-haze btn-circle" type="submit"><i class="fa fa-check"></i> Salvar</button>
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">

									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label">Campanha: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="promocao" required value="<?php echo $promocao; ?>">
														<input type="hidden" name="codpromo" value="<?php echo $codpromo; ?>" />
														<input type="hidden" name="imagem" value="<?php echo $imagem; ?>" />
														<input type="hidden" name="banner" value="<?php echo $banner; ?>" />
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Cupom: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="cupom" required value="<?php echo $cupom; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Status: <span class="required"> * </span>
													</label>
													<div class="col-md-10">
														<select class="table-group-action-input form-control input-medium" name="tipo" id="tipo">
															<?php if($tipo == 'V'){
																$flagvalor = 'selected';
																$hideporcentagem = 'hidden';
															}else{
																$flagporc = 'selected';
																$hidevalor = 'hidden';
															} ?>
															<option value="V" <?php echo @$flagvalor; ?>>Valor</option>
															<option value="P" <?php echo @$flagporc; ?>>Porcentagem</option>
														</select>
													</div>
												</div>
												<div class="form-group <?php echo @$hidevalor; ?>" id="valor">
													<label class="col-md-2 control-label">Valor
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="valor" value="<?php echo $valor; ?>" data-mask="decimal">
													</div>
												</div>
												<div class="form-group <?php echo @$hidevalor; ?>" id="qtdprodutos">
													<label class="col-md-2 control-label">Quantidade de produtos
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="qtdprodutos" value="<?php echo $qtdprodutos; ?>" data-mask="numerico">
													</div>
												</div>
												<div class="form-group <?php echo @$hideporcentagem; ?>" id="porcentagem">
													<label class="col-md-2 control-label">% de desconto
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="porcentagem" value="<?php echo $porcentagem; ?>" data-mask="numerico">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Data de expiração:</span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="dtvalidade" data-mask="date" required value="<?php echo $dtvalidade; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Imagem:
													</label>
													<div class="col-md-10">
														<input type="file" name="imagens[]">
													</div>
												</div>
												<?php if($imagem != ''){ ?>
													<div class="form-group">
														<label class="col-md-2 control-label">Imagem Atual
														</label>
														<div class="col-md-10">
															<img src="<?php echo $imagem; ?>" height="50" />
														</div>
													</div>
												<?php } ?>
												<div class="form-group">
													<label class="col-md-2 control-label">Banner:
													</label>
													<div class="col-md-10">
														<input type="file" name="banners[]">
													</div>
												</div>
												<?php if($banner != ''){ ?>
													<div class="form-group">
														<label class="col-md-2 control-label">Banner Atual
														</label>
														<div class="col-md-10">
															<img src="<?php echo $banner; ?>" height="100" />
														</div>
													</div>
												<?php } ?>
											</div>
										</div>

									</div>
								</div>
							</div>

							<div class="portlet-title">
								<div class="actions btn-set">
									<a type="button" class="btn btn-default btn-circle" href="<?php echo URL::base(true).'ecommerce/campanhas/'?>"><i class="fa fa-angle-left"></i> Voltar</a>
									<button class="btn green-haze btn-circle" type="submit"><i class="fa fa-check"></i> Salvar</button>
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
<script src="<?php echo URL::base(true); ?>assets/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
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
        jQuery(document).ready(function() {

        	$('input[data-mask]').each(function() {
            	var input = $(this);
                input.setMask(input.data('mask'));
        	});

        	$('#tipo').change(function(){
				var tipo = $(this).val();
				if(tipo == 'V'){
					$('#valor').removeClass('hidden');
					$('#qtdprodutos').removeClass('hidden');
					$('#porcentagem').addClass('hidden');
				}else{
					$('#porcentagem').removeClass('hidden');
					$('#valor').addClass('hidden');
					$('#qtdprodutos').addClass('hidden');
				}
            });

           Metronic.init(); // init metronic core components
			Layout.init(); // init current layout
			Demo.init(); // init demo features
           EcommerceProductsEdit.init();
        });
    </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
