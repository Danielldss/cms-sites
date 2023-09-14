
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
					<h1>Administrador Master <small> | Editar Conta</small></h1>
				</div>
				<!-- END PAGE TITLE -->

			</div>
			<!-- END PAGE HEAD -->

			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">

						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box yellow">
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?php echo URL::base(); ?>master/editarconta/" method="post" class="form-horizontal" enctype="multipart/form-data">
											<div class="form-actions top">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<a href="<?php echo URL::base(true).'master/listacontas/'; ?>" class="btn default">Listagem</a>
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Nome Fantasia</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="nomfantasia" value="<?php echo $nomfantasia; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Link: (EX: http://google.com.br)</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="site" value="<?php echo $site; ?>">
														<input type="hidden" name="codconta" value="<?php echo $codconta; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Dominio do site</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="dominio" value="<?php echo $dominio; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Banco de dados</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="banco" value="<?php echo $banco; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Usuário do banco</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="usuario" value="<?php echo $usuario; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Host do banco</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="host" value="<?php echo $host; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Senha</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="senha" value="<?php echo $senha; ?>">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Endereço</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="endereco" value="<?php echo $endereco; ?>">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Cidade</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="cidade" value="<?php echo $cidade; ?>">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Estado</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="estado" value="<?php echo $estado; ?>">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Bairro</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="bairro" value="<?php echo $bairro; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Facebook</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="facebook" value="<?php echo $facebook; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Twitter</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="twitter" value="<?php echo $twitter; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Instagram</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="instagram" value="<?php echo $instagram; ?>">
													</div>
												</div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Instagram User Id</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="userIdInstagram" value="<?php echo $userIdInstagram; ?>">
                                                    </div>
                                                </div>
												<div class="form-group">
													<label class="col-md-3 control-label">(%) valor de bônus</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="porcbonus" value="<?php echo $porcbonus; ?>">
													</div>
												</div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">TOKEN (integração)</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="token" disabled value="<?php echo $token; ?>">
                                                    </div>
                                                </div>
												<div class="form-group">
													<label class="col-md-3 control-label">Módulos</label>
													<div class="col-md-2">
														<p>Institucional</p>
														<input type="checkbox" value="S" <?php echo ($institucional == 'S')? 'checked' : ''; ?> class="form-control" name="institucional">
													</div>
													<div class="col-md-2">
														<p>E-commerce</p>
														<input type="checkbox" value="S" <?php echo ($ecommerce == 'S')? 'checked' : ''; ?> class="form-control" name="ecommerce">
													</div>
													<div class="col-md-2">
														<p>Aplicativo</p>
														<input type="checkbox" value="S" <?php echo ($aplicativo == 'S')? 'checked' : ''; ?> class="form-control" name="aplicativo">
													</div>
													<div class="col-md-2">
														<p>Serviços</p>
														<input type="checkbox" value="S" <?php echo ($servicos == 'S')? 'checked' : ''; ?> class="form-control" name="servicos">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Logo (Imagem)</label>
													<div class="col-md-4">
														<input type="file" name="imagem" />
														<input type="hidden" value="<?php echo $logo; ?>" name="imgold" />
													</div>
												</div>

											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<a href="<?php echo URL::base(true).'master/listacontas/'; ?>" class="btn default">Listagem</a>
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
