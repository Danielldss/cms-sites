
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
					<h1>Administrador Master <small> | Módulos</small></h1>
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
										<form action="<?php echo URL::base(); ?>master/ftp/<?php echo $codconta; ?>/" method="post" class="form-horizontal">
											<div class="form-actions top">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<a href="<?php echo URL::base(true).'master/listacontas/'; ?>" class="btn default">Voltar a listagem</a>
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Server (ip ou link do servidor)</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="server" value="<?php echo $server; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Usuário</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="usuario" value="<?php echo $usuario; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Senha</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">URL do projeto</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="url" value="<?php echo $url; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Diretorio do servidor (ex: /httpdocs)</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="diretorio" value="<?php echo $diretorio; ?>">
													</div>
												</div>
											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<a href="<?php echo URL::base(true).'master/listacontas/'; ?>" class="btn default">Voltar a listagem</a>
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
			</div>

			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
