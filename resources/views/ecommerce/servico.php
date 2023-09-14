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

			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>servico <small>criar e editar serviços</small></h1>
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
					<a href="#">Serviços</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal form-row-seperated" id="frmservico" method="post" action="<?php echo URL::base(true).'ecommerce/servicoEdit/'.$codservico.'/'; ?>" enctype="multipart/form-data">
						<input type="hidden" value="<?php echo $codservico; ?>" name="codservico" id="codservico"/>
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-basket font-green-sharp"></i>
									<span class="caption-subject font-green-sharp bold uppercase">Sserviço </span>
								</div>
								<div class="actions btn-set">
									<a class="btn btn-sm blue btn-circle" href="<?php echo URL::base(true); ?>ecommerce/servicoNew/"><i class="fa fa-plus"></i> Adicionar</a>
									<a type="button" class="btn btn-default btn-circle" href="<?php echo URL::base(true).'ecommerce/servicoCancel/'.$codservico; ?>"><i class="fa fa-angle-left"></i>  Excluir</a>
									<button class="btn btn-default btn-circle " type="reset"><i class="fa fa-reply"></i> Limpar campos</button>
									<button class="btn green-haze btn-circle" type="submit"><i class="fa fa-check"></i> Salvar</button>
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">Geral </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">Meta tags</a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">Imagens</a>
										</li>
										<li>
											<a href="<?php echo URL::base(true).'ecommerce/servicosRelacionados/'.$codservico.'/'; ?>">servicos Relacionados</a>
										</li>
										<li>
											<a href="<?php echo URL::base(true).'ecommerce/servicoAvaliacoes/'.$codservico.'/'; ?>">Avaliações</a>
										</li>
									</ul>
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">

												<div class="form-group">
													<label class="col-md-2 control-label">Nome: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="servico[nome]" value="<?php echo $servico; ?>" placeholder="" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Cód SKU (Referência):
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" value="<?php echo $refservico; ?>" name="servico[refservico]" placeholder="0001">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Valor: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" value="<?php echo $valor; ?>" data-mask="decimal" name="servico[valor]" placeholder="0,00" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Valor Promocional:
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" value="<?php echo $valorpromo; ?>" data-mask="decimal" name="servico[valorpromo]" placeholder="0,00">
														<span class="help-block">valor promocional para este servico.</span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Desconto a vista (%):
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" data-mask="numerico" value="<?php echo $desconto; ?>" name="servico[desconto]" placeholder="" />
														<span class="help-block">desconto em caso de pagamento a vista.</span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Quantidade de parcelas:
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" data-mask="numerico" value="<?php echo $parcelas; ?>" name="servico[parcelas]" placeholder="" />
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Descrição:
													</label>
													<div class="col-md-10">
														<textarea name="servico[descricao]" id="summernote_1"><?php echo $descricao; ?></textarea>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-2 control-label">Departamentos / Categorias:
													</label>
													<div class="col-md-10">
														<div class="form-control height-auto">
															<div class="scroller" style="height:275px;" data-always-visible="1">
																<ul class="list-unstyled">
																	<?php echo $departamentos; ?>
																</ul>
															</div>
														</div>
														<span class="help-block">pode selecionar uma ou mais. </span>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-2 control-label">Status: <span class="required"> * </span>
													</label>
													<div class="col-md-10">
														<select class="table-group-action-input form-control input-medium" name="servico[status]" required>
															<option value="">Selecione...</option>
															<?php if($status == 'A'){
																$publicado = 'selected';
															}else{
																$inativo = 'selected';
															} ?>
															<option value="A" <?php echo @$publicado; ?>>Publicado</option>
															<option value="I" <?php echo @$inativo; ?>>Inativo</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab_meta">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label">Meta Title:</label>
													<div class="col-md-10">
														<input type="text" class="form-control maxlength-handler" value="<?php echo $servico; ?>" name="servico[meta_title]" maxlength="100" placeholder="">
														<span class="help-block">
														max 100 chars </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Meta Keywords:</label>
													<div class="col-md-10">
														<textarea class="form-control maxlength-handler" rows="8" name="servico[meta_keywords]" maxlength="1000"><?php echo $keyword; ?></textarea>
														<span class="help-block">
														max 1000 chars </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Meta Description:</label>
													<div class="col-md-10">
														<textarea class="form-control maxlength-handler" rows="8" name="servico[meta_description]" maxlength="255"><?php echo $description; ?></textarea>
														<span class="help-block">
														max 255 chars </span>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab_images">
											<br />
											<div class="row fileupload-buttonbar">
												<div class="col-lg-7">
													<span class="btn green fileinput-button">
														<i class="fa fa-plus"></i>
														<span> Add imagem... </span>
														<input type="file" id="file" name="imagens[]" multiple>
													</span>
													<button type="submit" class="btn blue" >
														<i class="fa fa-upload"></i>
														<span> Iniciar upload </span>
													</button>
													<span class="fileupload-process">
													</span>
												</div>
											</div>
											<br />
											<table class="table table-bordered table-hover">
											<thead>
											<tr role="row" class="heading">
												<th width="8%">
													 Imagem
												</th>
												<th width="25%">
													 Title
												</th>
												<th width="10%">
													 Imagem normal
												</th>
												<th width="10%">
													 Imagem principal
												</th>
												<th width="10%">
													 Imagem de capa
												</th>
												<th width="10%">
												</th>
											</tr>
											</thead>
											<tbody>

											<?php echo $imagens; ?>

											</tbody>
											</table>
										</div>

									</div>
								</div>
							</div>

							<div class="portlet-title">
								<div class="actions btn-set">
									<a type="button" class="btn btn-default btn-circle" href="<?php echo URL::base(true).'ecommerce/servicoCancel/'.$codservico; ?>"><i class="fa fa-angle-left"></i> Excluir</a>
									<button class="btn btn-default btn-circle " type="reset"><i class="fa fa-reply"></i> Limpar campos</button>
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
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo URL::base(true); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/scripts/datatable.js"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/pages/scripts/ecommerce-servicos-edit.js"></script>
<script src="<?php echo URL::base(); ?>assets/global/scripts/meiomask.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>

function avaliacoes(){
	$('#tableAvaliacoes').load("<?php echo URL::base(true).'ecommerce/servicoListAvaliacoes/'.$codservico; ?>");
}

function variacoes(){
	$('#tableVariacao').load("<?php echo URL::base(true).'ecommerce/servicoListVariacao/'.$codservico; ?>");
}
function grupos(){
	$('#codgrupo').load("<?php echo URL::base(true).'ecommerce/servicoListGrupo/'; ?>");
}
function delvariacao(cod){
	var url = '<?php echo URL::base(true).'ecommerce/servicoDelVariacao/'; ?>';
	$('#tableVariacao').load(url+cod);
	variacoes();
}

jQuery(document).ready(function(e) {

	$('input[data-mask]').each(function() {
    	var input = $(this);
        input.setMask(input.data('mask'));
	});

	variacoes();

	/*begin cadastro grupo de servico*/
		$('#btnGrupo').click(function(){
			$('#campoGrupo').removeClass('hidden');
		});
		$('#btnAddGrupo').click(function(){
			var data = {
				grupo: $('#grupo').val()
			}
			$.ajax({
	          type:	"POST",
	          url:	"<?php echo URL::base(true).'ecommerce/servicoAddGrupo/'; ?>",
	          data:	data,
	          success: function(){
		        $('#returnGrupo').fadeIn();
				$('#grupo').val('');
				$('#campoGrupo').addClass('hidden');
				grupos();
				setTimeout(function(){
					$('#returnGrupo').fadeOut();
				}, 2000)
			  },
			  error: function(){
				alert('erro');
				$('#campoGrupo').addClass('hidden');
				$('#grupo').val('');
			  }
	        });
		});
	/*end cadastro grupo de servico*/

	/*begin cadastro de variação*/
		$('#btnVariacao').click(function(){
			var data = {
				valvariacao:	$('#valvariacao').val(),
				preco: 			$('#preco').val(),
				quantidade: 	$('#quantidade').val(),
				peso: 			$('#peso').val(),
				largura: 		$('#largura').val(),
				comprimento:	$('#comprimento').val(),
				altura: 		$('#altura').val(),
				codvariacao: 	$('#codvariacao').val(),
				codservico: 	$('#codservico').val(),
				codref:			$('#codref').val()
			}
			$.ajax({
	          type:	"POST",
	          url:	"<?php echo URL::base(true).'ecommerce/servicoAddVariacao/'; ?>",
	          data:	data,
	          success: function(){
		        $('#returnVariacao').fadeIn();
				$('#frmVariacao input').val('');
				variacoes();
				setTimeout(function(){
					$('#returnVariacao').fadeOut();
				}, 2000)
			  },
			  error: function(){
				alert('erro');
				$('#frmVariacao input[type=text]').val('');
			  }
	        });
		});
	/*end cadastro de variação*/

	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features

});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
