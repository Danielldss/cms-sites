
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

			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Administrador Master <small> | Acessos</small></h1>
				</div>
				<!-- END PAGE TITLE -->

			</div>
			<!-- END PAGE HEAD -->


			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="<?php echo URL::base(); ?>">Início</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Total de acessos</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->

			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">

					<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">

						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box ">
									<!-- BEGIN SAMPLE TABLE PORTLET-->
									<div class="portlet box">

										<div class="portlet-body">

											<div class="table-responsive">
												<div class="row">
													<div class="col-md-12">
														<form action="<?php echo URL::base(true).'relatorio/acessos/'; ?>" method="post" class="form-horizontal">
															<div class="col-md-3">
																<select class="form-control" name="codpagina">
																	<option value="">PESQUISAR POR PÁGINA</option>
																	<?php echo $paginas; ?>
																</select>
															</div>
															<div class="col-md-3">
																<input type="text" data-mask="date" class="form-control" name="dtainicial" placeholder="Período inicial">
															</div>
															<div class="col-md-3">
																<input type="text" data-mask="date" class="form-control" name="dtafinal" placeholder="Período Final">
															</div>
															<div class="col-md-3">
																<button type="submit" class="btn green">Filtrar</button>
															</div>
														</form>
													</div>
												</div>

												<br clear="all" /><br />

												<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th>
																 URL
															</th>
															<th>
																 IP
															</th>
															<th>
																 Data de acesso
															</th>
															<th>
																 Página
															</th>
															<th>
																 Conteúdo
															</th>
														</tr>
													</thead>
													<tbody>
														<?php echo $acessos; ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!-- END SAMPLE TABLE PORTLET-->

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
