<?php defined('SYSPATH') or die('No direct script access.');  ?>
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

			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Dashboard <small>dashboard & estatísticas</small></h1>
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
					<a href="#">Dashboard</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-green-sharp"><small class="font-green-sharp">R$</small> <?php echo $receitaMensal; ?></h3>
								<small>LUCRO TOTAL</small>
							</div>
							<div class="icon">
								<i class="icon-pie-chart"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 100%;" class="progress-bar progress-bar-success green-sharp">
								<span class="sr-only"></span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 <?php echo $mesAtual.' / '.date('Y'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-red-haze"><?php echo $pedidosMensal; ?></h3>
								<small>TOTAL DE PEDIDOS</small>
							</div>
							<div class="icon">
								<i class="icon-like"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 100%;" class="progress-bar progress-bar-success red-haze">
								<span class="sr-only"></span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 <?php echo $mesAtual.' / '.date('Y'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-blue-sharp"><?php echo $clientes; ?></h3>
								<small>TOTAL DE CLIENTES</small>
							</div>
							<div class="icon">
								<i class="icon-basket"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 100%;" class="progress-bar progress-bar-success blue-sharp">
								<span class="sr-only">45% grow</span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 <?php echo $mesAtual.' / '.date('Y'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<!-- Begin: life time stats -->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-bar-chart font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Ultimos Pedidos</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="fullscreen">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="tabbable-line">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#overview_1" data-toggle="tab">Realizados</a>
									</li>
									<li>
										<a href="#overview_2" data-toggle="tab">Pendentes</a>
									</li>
									<li>
										<a href="#overview_3" data-toggle="tab">Cancelados</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="overview_1">
										<div class="table-responsive">
											<table class="table table-striped table-hover table-bordered">
											<thead>
											<tr>
												<th>
													 Cliente
												</th>
												<th>
													Qdt - Produtos
												</th>
												<th>
													 Total
												</th>
												<td>
													Data do pedido
												</td>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>

											<?php echo $pedpaids; ?>

											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="overview_2">
										<div class="table-responsive">
											<table class="table table-striped table-hover table-bordered">
											<thead>
											<tr>
												<th>
													 Cliente
												</th>
												<th>
													Qdt - Produtos
												</th>
												<th>
													 Total
												</th>
												<td>
													Data do pedido
												</td>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>

											<?php echo $pedprocessing; ?>

											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="overview_3">
										<div class="table-responsive">
											<table class="table table-striped table-hover table-bordered">
											<thead>
											<tr>
												<th>
													 Cliente
												</th>
												<th>
													Qdt - Produtos
												</th>
												<th>
													 Total
												</th>
												<td>
													Data do pedido
												</td>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>
											<?php echo $pedrefunded; ?>
											</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->
				</div>
				<div class="col-md-6">
					<!-- Begin: life time stats -->
					<div class="portlet light">
						<div class="portlet-title tabbable-line">
							<div class="caption">
								<i class="icon-share font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Receita</span>
								<span class="caption-helper">Estatística Anual</span>
							</div>
							<ul class="nav nav-tabs">
								<li>
									<a href="#portlet_tab2" data-toggle="tab" id="statistics_amounts_tab">
									Receita </a>
								</li>
								<li class="active">
									<a href="#portlet_tab1" data-toggle="tab">
									Pedidos </a>
								</li>
							</ul>
						</div>
						<div class="portlet-body">
							<div class="tab-content">
								<div class="tab-pane active" id="portlet_tab1">
									<div id="statistics_1" class="chart">
									</div>
								</div>
								<div class="tab-pane" id="portlet_tab2">
									<div id="statistics_2" class="chart">
									</div>
								</div>
							</div>
							<div class="well margin-top-10 no-margin no-border">
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-success">
										Receita: </span>
										<h3>R$ <?php echo $receitaAnual; ?></h3>
									</div>

									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-warning">
										Pedidos: </span>
										<h3><?php echo $pedidosAnual; ?></h3>
									</div>

									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-danger">
										Clientes: </span>
										<h3><?php echo $clientes; ?></h3>
									</div>
								</div>
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
<script src="<?php echo URL::base(true); ?>assets/global/plugins/flot/jquery.flot.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/flot/jquery.flot.categories.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo URL::base(true); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/pages/scripts/ecommerce-index.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
	jQuery(document).ready(function() {
    	Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Demo.init(); // init demo features

        EcommerceIndex.init('<?php echo date('Y'); ?>', '<?php echo URL::base(true); ?>');
    });
</script>

</body>
<!-- END BODY -->
</html>
