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
					<h1>Enviar arquivo via e-mail</h1>
				</div>
				<!-- END PAGE TITLE -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="<?php echo URL::base(true); ?>">Home</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Enviar arquivo via e-mail</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="portlet light">
				<div class="portlet-body">
					<div class="row">
						<div class="col-md-12">
						
							<form action="" method="POST" enctype="multipart/form-data"  class="form-horizontal">
								
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-2 control-label">E-mail destinatário</label>
										<div class="col-md-10">
											<input type="text" name="email" class="form-control" placeholder="Preencha o campo" required>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-2 control-label">Assunto</label>
										<div class="col-md-10">
											<input type="text" name="email" class="form-control" placeholder="Preencha o campo" required>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-2 control-label">Nome do arquivo</label>
										<div class="col-md-10">
											<input type="text" name="nomarquivo" class="form-control" value="<?php echo $nomearquivo;; ?>" placeholder="Preencha o campo" required>
											<input type="hidden" name="arquivo" class="form-control" value="<?php echo $arquivo; ?>">
										</div>
									</div>
									
									<div class="form-actions fluid">
										<div class="row">
											<div class="col-md-offset-2 col-md-12">
												<button type="submit" class="btn green"> Enviar arquivo</button>
												<a href="javascript:history.go(-1)" class="btn default">Cancelar</a>
											</div>
										</div>
									</div>
									
								</div>
								
							</form>
							
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


