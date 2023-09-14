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
					<h1>Compra sem cadastro</h1>
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
					<a href="<?php echo URL::base(true).'ecommerce/usuarios/'; ?>">Compra sem cadastro</a>
					<i class="fa fa-circle"></i>
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
									<span class="caption-subject font-green-sharp bold uppercase">Compra sem cadastro </span>
								</div>
								<div class="actions btn-set">
									<a type="button" class="btn btn-default btn-circle" href="<?php echo URL::base(true).'ecommerce/usuarios/'; ?>"><i class="fa fa-angle-left"></i> Voltar</a>
								</div>
							</div>
							<div class="portlet-body">

								<div class="tabbable">
									<div class="tab-content no-space">
										<div class="form-body">

											<div class="form-group">
												<label class="col-md-1 control-label">Nome:
												</label>
												<div class="col-md-11">
													<input type="text" name="nome" class="form-control" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-1 control-label">E-mail:
												</label>
												<div class="col-md-5">
													<input type="text" name="email" class="form-control" required>
												</div>
												<label class="col-md-1 control-label">Cpf:
												</label>
												<div class="col-md-5">
													<input type="text" name="cpf" data-mask=cpf class="form-control" required>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="tab-content no-space">
										<div class="form-body">
											<div class="form-group">
												<label class="col-md-1 control-label">Produto:
												</label>
												<div class="col-md-11">
													<input type="text" name="produto[0]" class="form-control" placeholder="Camisa Branca" >
													<input type="hidden" class="form-control" id="qtdarr" name="qtdarr" value="0">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-1 control-label">Quantidade:
												</label>
												<div class="col-md-5">
													<input type="text" name="quantidade[0]" class="form-control" placeholder="1" value="1">
												</div>
												<label class="col-md-1 control-label">Valor:
												</label>
												<div class="col-md-5">
													<input type="text" name="valor[0]" data-mask="decimal" class="form-control" placeholder="0,00" >
												</div>
											</div>
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
							'<div class="col-md-11"><input type="text" name="produto['+numarr+']" class="form-control" placeholder="Camisa Branca" ></div>'+
						'</div>'+
						'<div class="form-group">'+
							'<label class="col-md-1 control-label">Quantidade:</label>'+
							'<div class="col-md-5">'+
								'<input type="text" name="quantidade['+numarr+']" class="form-control" placeholder="1" value="1">'+
							'</div>'+
							'<label class="col-md-1 control-label">Valor:</label>'+
							'<div class="col-md-5">'+
								'<input type="text" name="valor['+numarr+']"  class="form-control decimal" placeholder="0,00" >'+
							'</div>'+
						'</div>'+
					'</div>'+
				'</div>';
	$('.tabbable').append(html);
	$('#qtdarr').val(numarr);
	$('.decimal').attr('data-mask', 'decimal');
	$('input[data-mask]').each(function() {
    	var input = $(this);
        input.setMask(input.data('mask'));
	});


}
jQuery(document).ready(function(e) {

	$('input[data-mask]').each(function() {
    	var input = $(this);
        input.setMask(input.data('mask'));
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
