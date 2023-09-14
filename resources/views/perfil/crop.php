
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
										<img src="<?php echo URL::base().'uploads/perfil/'.$imagem; ?>" id="demo8" alt="Jcrop Example"/>
									</div>
									<br clear="all"/><br />
									<div class="col-lg-12 responsive-1024">
										<!-- This is the form that our event handler fills -->
										<form action="<?php echo URL::base(true).'perfil/crop/'; ?>" method="post" id="demo8_form">
											<input type="hidden" id="crop_x" name="x"/>
											<input type="hidden" id="crop_y" name="y"/>
											<input type="hidden" id="crop_w" name="w"/>
											<input type="hidden" id="crop_h" name="h"/>
											<input type="hidden" name="imagem" value="<?php echo 'uploads/perfil/'.$imagem; ?>">
											<input type="submit" value="Cortar Imagem" class="btn btn-large green"/>
											<a href="<?php echo URL::base(true).'perfil/'; ?>" class="btn default" >Manter Imagem</a>
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
