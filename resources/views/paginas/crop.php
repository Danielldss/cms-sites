
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
			<div class="page-head">
				<div class="page-title">
					<h1>Editar <small>Imagem</small></h1>
				</div>
			</div>
			<!-- END PAGE HEAD -->

			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable tabbable-custom tabbable-noborder">
						<div class="tab-content">
							<div class="tab-pane active" id="tab_8">
								<div class="row">
									<div class="col-lg-12 responsive-1024">
										<!-- This is the image we're attaching Jcrop to -->
										<img src="<?php echo $url.$imagem; ?>" height="400px" id="demo8" alt="Jcrop Example"/>
									</div>
									<br clear="all"/><br />
									<div class="col-lg-12 responsive-1024">
										<!-- This is the form that our event handler fills -->
										<form action="<?php echo URL::base(true).'pagina/crop/'.$codpagina.'/'.$codconteudo.'/'.$codimage; ?>" method="post" id="demo8_form">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Title / Alt</label>
													<div class="col-md-6">
														<input type="text" name="title" class="form-control" value="<?php echo $title; ?>" placeholder="Preencha o campo">
													</div>
												</div>
												<br clear="all" /><br>
												<div class="form-group">
													<label class="col-md-3 control-label">Tipo</label>
													<div class="col-md-6">
														<select name="tipo" class="form-control">
															<?php echo $opcoes; ?>
														</select>
													</div>
												</div>
												<br clear="all" /><br>
												<input type="hidden" id="crop_x" name="x"/>
												<input type="hidden" id="crop_y" name="y"/>
												<input type="hidden" id="crop_w" name="w"/>
												<input type="hidden" id="crop_h" name="h"/>
												<input type="hidden" name="imagem" value="<?php echo $diretorio.$imagem; ?>">
												<input type="submit" value="Atualizar / Cortar" class="btn btn-large green"/>
												<a href="<?php echo URL::base(true).'pagina/imagens/'.$codpagina.'/'.$codconteudo.'/'; ?>" class="btn default" >Cancelar</a>
											</div>
										</form>
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
