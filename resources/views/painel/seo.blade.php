{!! $header !!}

<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">

	<!-- BEGIN SIDEBAR -->
    {!! $menu !!}
	<!-- END SIDEBAR -->

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">

				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>SEO</h1>
				</div>
				<!-- END PAGE TITLE -->

			</div>
			<!-- END PAGE HEAD -->

			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">

					{!! ($retorno)? $retorno : '' !!}

					<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">

						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box yellow">
									<div class="portlet-body form">

										<!-- BEGIN FORM-->
										<form action="/painel/seo" method="post" class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
											<div class="form-actions top">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<a href="/" class="btn default">Cancelar</a>
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Titulo do site</label>
													<div class="col-md-9">
														<input type="text" name="title" value="{{ $title }}" class="form-control" placeholder="Preencha o campo" />
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Keywords</label>
													<div class="col-md-9">
														<textarea name="keywords" class="form-control" placeholder="Preencha o campo">{{ $keywords }}</textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Description</label>
													<div class="col-md-9">
														<textarea name="description" class="form-control" placeholder="Preencha o campo">{{ $description }}</textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Alterar Favicon</label>
													<div class="col-md-9">
														<input type="file" name="imagem" >
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Favicon Atual</label>
													<div class="col-md-9">
														@if($favicon != '')
														    <img src="{{ $favicon }}" />
														@else
														    <p>Nenhum favicon adicionado!</p>
														@endif
													</div>
												</div>
											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<a href="/" class="btn default">Cancelar</a>
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
{!! $footer !!}
