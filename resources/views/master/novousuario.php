
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
					<h1>Administrador Master <small> | Novo Usuário</small></h1>
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
					<a href="<?php echo URL::base(); ?>master/listacontas/">Contas</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Novo usuário</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->

			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">

						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box yellow">
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?php echo URL::base(); ?>master/novousuario/" method="post" class="form-horizontal">
											<div class="form-actions top">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<a href="<?php echo URL::base(true).'master/listausuarios/'.$codconta; ?>" class="btn default">Listagem</a>
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Nome</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="nome" required>
														<input type="hidden" name="codconta" value="<?php echo $codconta; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">E-mail</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="email" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Senha</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="senha" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Tipo de usuário</label>
													<div class="col-md-4">
														<select class="form-control" name="acesso">
															<option value="C">Cliente</option>
															<option value="A">Administrador</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<a href="<?php echo URL::base(true).'master/listausuarios/'.$codconta; ?>" class="btn default">Listagem</a>
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
