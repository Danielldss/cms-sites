
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
					<h1>Produtos <small>Listagem de produtos</small></h1>
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
					<a href="#">E-commerce</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Produtos</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<?php echo $retorno; ?>
					<!-- Begin: life time stats -->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Produtos</span>
								<span class="caption-helper">Gerenciar produtos...</span>
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn btn-sm blue" href="<?php echo URL::base(true).'ecommerce/produtoNew/';?>">
									<i class="fa fa-plus"></i> Adicionar</a>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-container">

								<table class="table table-striped table-bordered table-hover" id="datatable_products">
								<thead>
								<tr role="row" class="heading">
									<th width="1%">
										<input type="checkbox" class="group-checkable">
									</th>
									<th width="10%">
										 Cod. Ref.
									</th>
									<th width="5%">
										 Imagem
									</th>
									<th width="15%">
										 Produto
									</th>
									<th width="10%">
										 Preço
									</th>
									<th width="10%">
										 Estoque
									</th>

									<th width="15%">
										 Status
									</th>
									<th width="10%">
										 Ações
									</th>
								</tr>
								<tr role="row" class="filter">
									<td>
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="product_id">
									</td>
									<td>

									</td>
									<td>
                                        <div class="margin-bottom-5">
										    <input type="text" class="form-control form-filter input-sm" name="product_name">
                                        </div>
                                        <div class="margin-bottom-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Peso:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control form-filter input-sm" data-mask="numerico" name="product_peso" placeholder="Peso até: (Ex: 1000g)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="margin-bottom-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Altura:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control form-filter input-sm" data-mask="numerico" name="product_altura" placeholder="Altura até: (Ex: 15cm)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="margin-bottom-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Largura:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control form-filter input-sm" data-mask="numerico" name="product_largura" placeholder="Largura até: (Ex: 15cm)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="margin-bottom-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Comp.:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control form-filter input-sm" data-mask="numerico" name="product_comprimento" placeholder="Comp. até: (Ex: 15cm)">
                                                </div>
                                            </div>
                                        </div>
									</td>
									<td>
										<div class="margin-bottom-5">
											<input type="text" class="form-control form-filter input-sm" data-mask="decimal" name="product_price_from" placeholder="De 0,00"/>
										</div>
										<input type="text" class="form-control form-filter input-sm" data-mask="decimal" name="product_price_to" placeholder="Até 1.000,00"/>
									</td>
									<td>
										<div class="margin-bottom-5">
											<input type="text" class="form-control form-filter input-sm" name="product_quantity_from" placeholder="De 0"/>
										</div>
										<input type="text" class="form-control form-filter input-sm" name="product_quantity_to" placeholder="Até 100">
									</td>

									<td>
                                        <div class="margin-bottom-5">
                                            <select name="product_status" class="form-control form-filter input-sm">
                                                <option value="">Selecione...</option>
                                                <option value="A">Publicado</option>
                                                <option value="R">Rascunho</option>
                                                <option value="I">Inativo</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Lançamento:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="product_lancamento" class="form-control form-filter input-sm">
                                                    <option value="">Selecione...</option>
                                                    <option value="S">Sim</option>
                                                    <option value="N">Não</option>
                                                </select>
                                            </div>
                                        </div>
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
					<!-- End: life time stats -->
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
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo URL::base(true); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/scripts/datatable.js"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/pages/scripts/ecommerce-products.js"></script>
<script src="<?php echo URL::base(); ?>assets/global/scripts/meiomask.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {

        	$('input[data-mask]').each(function() {
            	var input = $(this);
                input.setMask(input.data('mask'));
        	});

           	Metronic.init(); // init metronic core components
			Layout.init(); // init current layout
			Demo.init(); // init demo features
			EcommerceProducts.init('<?php echo URL::base(true); ?>');
        });
    </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
