

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
					<h1>SMTP <small>Configuração de email autênticado</small></h1>
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
										<form action="<?php echo URL::base(true).'painel/smtp/'; ?>" method="post" class="form-horizontal">
											<div class="form-actions top">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<a href="<?php echo URL::base(true); ?>" class="btn default">Cancelar</a>
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">E-mail</label>
													<div class="col-md-9">
														<input type="text" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Preencha o campo" />
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Host</label>
													<div class="col-md-9">
														<textarea name="host" class="form-control" placeholder="Preencha o campo"><?php echo $host; ?></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Usuário</label>
													<div class="col-md-9">
														<textarea name="usuario" class="form-control" placeholder="Preencha o campo"><?php echo $usuario; ?></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Senha</label>
													<div class="col-md-9">
														<textarea name="senha" class="form-control" placeholder="Preencha o campo"><?php echo $senha; ?></textarea>
													</div>
												</div>

											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<a href="<?php echo URL::base(true); ?>" class="btn default">Cancelar</a>
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
