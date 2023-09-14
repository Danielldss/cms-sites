
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
					<h1>Cadastro <small>Páginas</small></h1>
				</div>
				<!-- END PAGE TITLE -->

			</div>
			<!-- END PAGE HEAD -->

			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<?php echo $retorno; ?>
					<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box yellow">
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?php echo URL::base(true); ?>painel/enquetes/<?php echo $tipo.'/'.$codenquete; ?>" method="post" class="form-horizontal">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Pergunta</label>
													<div class="col-md-4">
														<input type="text" name="pergunta" value="<?php echo $enquete; ?>" class="form-control" required>
														<!-- <span class="help-block"><code>A block of help text.</code> </span> -->
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Data de Expiração</label>
													<div class="col-md-4">
														<input type="text" name="dtexpiracao" value="<?php echo HTMLhelp::dataBR($dtexpiracao); ?>" class="form-control form-control-inline input-medium date-picker" required>
														<!-- <span class="help-block"><code>A block of help text.</code> </span> -->
													</div>
												</div>
											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<button type="button" class="btn default">Cancelar</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
				<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">

						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box ">
									<!-- BEGIN SAMPLE TABLE PORTLET-->
									<div class="portlet box">

										<div class="portlet-body">

											<div class="table-responsive">
												<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th>
																 ENQUETE
															</th>
															<th width="250px">
																 AÇÕES
															</th>
														</tr>
													</thead>
													<tbody>
														<?php echo $enquetes; ?>
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
