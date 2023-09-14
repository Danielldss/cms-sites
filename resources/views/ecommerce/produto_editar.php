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
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Product Edit <small>create & edit product</small></h1>
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
					<a href="#">Editar Produto</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal form-row-seperated" method="post" action="#">
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-basket font-green-sharp"></i>
									<span class="caption-subject font-green-sharp bold uppercase">Editar Produto </span>
								</div>
								<div class="actions btn-set">
									<button type="button" name="back" class="btn btn-default btn-circle" onclick="window.back();"><i class="fa fa-angle-left"></i> Voltar</button>
									<button class="btn btn-default btn-circle " type="reset"><i class="fa fa-reply"></i> Limpar campos</button>
									<button class="btn green-haze btn-circle" type="submit"><i class="fa fa-check"></i> Salvar</button>
									<div class="btn-group">
										<a class="btn yellow btn-circle" href="javascript:;" data-toggle="dropdown">
										<i class="fa fa-share"></i> Mais <i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="javascript:;">
												Duplicar </a>
											</li>
											<li>
												<a href="javascript:;">
												Excluir </a>
											</li>
											<li class="divider">
											</li>
											<li>
												<a href="javascript:;">
												Imprimir </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											Geral </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">
											Meta tags</a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">
											Imagens </a>
										</li>
										<li>
											<a href="#tab_reviews" data-toggle="tab">
											Avaliações
											</a>
										</li>
										<li>
											<a href="#tab_history" data-toggle="tab">Histórico de pedidos</a>
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
														<input type="text" class="form-control" name="product[name]" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Descrição: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<textarea class="form-control" name="product[description]"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Descrição Curta: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<textarea class="form-control" name="product[short_description]"></textarea>
														<span class="help-block">mostrado na lista de produtos </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Categorias: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<div class="form-control height-auto">
															<div class="scroller" style="height:275px;" data-always-visible="1">
																<ul class="list-unstyled">
																	<li>
																		<label><input type="checkbox" name="product[categories][]" value="1">Mens</label>
																		<ul class="list-unstyled">
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">Footwear</label>
																			</li>
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">Clothing</label>
																			</li>
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">Accessories</label>
																			</li>
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">Fashion Outlet</label>
																			</li>
																		</ul>
																	</li>
																</ul>
															</div>
														</div>
														<span class="help-block">seleccionar uma ou mais categorias </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Cód SKU (Referência): <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="product[sku]" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Valir: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="product[price]" placeholder="">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-2 control-label">Status: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<select class="table-group-action-input form-control input-medium" name="product[status]">
															<option value="">Select...</option>
															<option value="1">Publicado</option>
															<option value="0">Não Publicado</option>
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
														<input type="text" class="form-control maxlength-handler" name="product[meta_title]" maxlength="100" placeholder="">
														<span class="help-block">
														max 100 chars </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Meta Keywords:</label>
													<div class="col-md-10">
														<textarea class="form-control maxlength-handler" rows="8" name="product[meta_keywords]" maxlength="1000"></textarea>
														<span class="help-block">
														max 1000 chars </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Meta Description:</label>
													<div class="col-md-10">
														<textarea class="form-control maxlength-handler" rows="8" name="product[meta_description]" maxlength="255"></textarea>
														<span class="help-block">
														max 255 chars </span>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab_images">
											<div class="alert alert-success margin-bottom-10">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
												<i class="fa fa-warning fa-lg"></i> tipo de imagem e informações precisam ser especificados.
											</div>
											<div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
												<a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn yellow">
												<i class="fa fa-plus"></i> Select Files </a>
												<a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn green">
												<i class="fa fa-share"></i> Upload Files </a>
											</div>
											<div class="row">
												<div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12">
												</div>
											</div>
											<table class="table table-bordered table-hover">
											<thead>
											<tr role="row" class="heading">
												<th width="8%">
													 Image
												</th>
												<th width="25%">
													 Label
												</th>
												<th width="8%">
													 Sort Order
												</th>
												<th width="10%">
													 Base Image
												</th>
												<th width="10%">
													 Small Image
												</th>
												<th width="10%">
													 Thumbnail
												</th>
												<th width="10%">
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="assets/admin/pages/media/works/img1.jpg" class="fancybox-button" data-rel="fancybox-button">
													<img class="img-responsive" src="assets/admin/pages/media/works/img1.jpg" alt="">
													</a>
												</td>
												<td>
													<input type="text" class="form-control" name="product[images][1][label]" value="Thumbnail image">
												</td>
												<td>
													<input type="text" class="form-control" name="product[images][1][sort_order]" value="1">
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][1][image_type]" value="1">
													</label>
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][1][image_type]" value="2">
													</label>
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][1][image_type]" value="3" checked>
													</label>
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-sm">
													<i class="fa fa-times"></i> Remove </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="assets/admin/pages/media/works/img2.jpg" class="fancybox-button" data-rel="fancybox-button">
													<img class="img-responsive" src="assets/admin/pages/media/works/img2.jpg" alt="">
													</a>
												</td>
												<td>
													<input type="text" class="form-control" name="product[images][2][label]" value="Product image #1">
												</td>
												<td>
													<input type="text" class="form-control" name="product[images][2][sort_order]" value="1">
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][2][image_type]" value="1">
													</label>
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][2][image_type]" value="2" checked>
													</label>
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][2][image_type]" value="3">
													</label>
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-sm">
													<i class="fa fa-times"></i> Remove </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="assets/admin/pages/media/works/img3.jpg" class="fancybox-button" data-rel="fancybox-button">
													<img class="img-responsive" src="assets/admin/pages/media/works/img3.jpg" alt="">
													</a>
												</td>
												<td>
													<input type="text" class="form-control" name="product[images][3][label]" value="Product image #2">
												</td>
												<td>
													<input type="text" class="form-control" name="product[images][3][sort_order]" value="1">
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][3][image_type]" value="1" checked>
													</label>
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][3][image_type]" value="2">
													</label>
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][3][image_type]" value="3">
													</label>
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-sm">
													<i class="fa fa-times"></i> Remove </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
										<div class="tab-pane" id="tab_reviews">
											<div class="table-container">
												<table class="table table-striped table-bordered table-hover" id="datatable_reviews">
												<thead>
												<tr role="row" class="heading">
													<th width="5%">
														 Review&nbsp;#
													</th>
													<th width="10%">
														 Review&nbsp;Date
													</th>
													<th width="10%">
														 Customer
													</th>
													<th width="20%">
														 Review&nbsp;Content
													</th>
													<th width="10%">
														 Status
													</th>
													<th width="10%">
														 Actions
													</th>
												</tr>
												<tr role="row" class="filter">
													<td>
														<input type="text" class="form-control form-filter input-sm" name="product_review_no">
													</td>
													<td>
														<div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
															<input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_from" placeholder="From">
															<span class="input-group-btn">
															<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
														<div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
															<input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_to" placeholder="To">
															<span class="input-group-btn">
															<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
													</td>
													<td>
														<input type="text" class="form-control form-filter input-sm" name="product_review_customer">
													</td>
													<td>
														<input type="text" class="form-control form-filter input-sm" name="product_review_content">
													</td>
													<td>
														<select name="product_review_status" class="form-control form-filter input-sm">
															<option value="">Select...</option>
															<option value="pending">Pending</option>
															<option value="approved">Approved</option>
															<option value="rejected">Rejected</option>
														</select>
													</td>
													<td>
														<div class="margin-bottom-5">
															<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
														</div>
														<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
													</td>
												</tr>
												</thead>
												<tbody>
												</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane" id="tab_history">
											<div class="table-container">
												<table class="table table-striped table-bordered table-hover" id="datatable_history">
												<thead>
												<tr role="row" class="heading">
													<th width="25%">
														 Datetime
													</th>
													<th width="55%">
														 Description
													</th>
													<th width="10%">
														 Notification
													</th>
													<th width="10%">
														 Actions
													</th>
												</tr>
												<tr role="row" class="filter">
													<td>
														<div class="input-group date datetime-picker margin-bottom-5" data-date-format="dd/mm/yyyy hh:ii">
															<input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_from" placeholder="From">
															<span class="input-group-btn">
															<button class="btn btn-sm default date-set" type="button"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
														<div class="input-group date datetime-picker" data-date-format="dd/mm/yyyy hh:ii">
															<input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_to" placeholder="To">
															<span class="input-group-btn">
															<button class="btn btn-sm default date-set" type="button"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
													</td>
													<td>
														<input type="text" class="form-control form-filter input-sm" name="product_history_desc" placeholder="To"/>
													</td>
													<td>
														<select name="product_history_notification" class="form-control form-filter input-sm">
															<option value="">Select...</option>
															<option value="pending">Pending</option>
															<option value="notified">Notified</option>
															<option value="failed">Failed</option>
														</select>
													</td>
													<td>
														<div class="margin-bottom-5">
															<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
														</div>
														<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
													</td>
												</tr>
												</thead>
												<tbody>
												</tbody>
												</table>
											</div>
										</div>
									</div>
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
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {
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
