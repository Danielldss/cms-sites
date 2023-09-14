{!! $header !!}
<script>
	$(function(){
		$('.note-editable').html($('#textoEdit').html());
		$('#slug').keyup(function(){
			var slug = $('#slug').val();
			$('#urlslug').html('www.seusite.com.br/'+slug);
		});
	});
</script>
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
					<h1>Editar Conteúdo <small>{{ $pagina }}</small></h1>
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
										<form action="{{ '/pagina/editarConteudo/'.$codpagina.'/'.$codconteudo }}" method="post" class="form-horizontal">
                                            @csrf
											<div style="display: none;" id="textoEdit">{!! $texto !!}</div>
											<div class="form-actions top">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<a href="{{'/pagina/form/'.$codpagina}}" class="btn default">Cancelar</a>
													</div>
												</div>
											</div>

											<div class="portlet box green">
												<div class="portlet-title">
													<div class="caption">
														<i class="fa fa-google"></i>SEO
													</div>
													<div class="tools">
														<a href="javascript:;" class="expand" data-original-title="" title="">
														</a>
													</div>
												</div>
												<div class="portlet-body flip-scroll" style="display: none;">
													<div class="form-body">
														<div class="form-group">
															<label class="col-md-2 control-label">Title</label>
															<div class="col-md-10">
																<input type="text" name="title" class="form-control" placeholder="Preencha o campo" value="{{ $title }}">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-2 control-label">Description</label>
															<div class="col-md-10">
																<textarea name="description" class="form-control" placeholder="Preencha o campo">{{ $description }}</textarea>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-2 control-label">Url Amigável</label>
															<div class="col-md-10">
																<input type="text" name="slug" id="slug" class="form-control" placeholder="Preencha o campo" value="{{ $slug }}">
																<span class="help-block" id="urlslug">www.seusite.com.br/{{ $slug }}</span>
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Título</label>
													<div class="col-md-9">
														<input type="text" name="titulo" class="form-control" value="{{ $titulo }}" placeholder="Preencha o campo" required>
														<!--  <span class="help-block"><code>A block of help text.</code> </span> -->
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Sub Título</label>
													<div class="col-md-9">
														<input type="text" name="subtitulo" class="form-control" value="{{ $subtitulo }}" placeholder="Preencha o campo">
														<!--  <span class="help-block"><code>A block of help text.</code> </span> -->
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Data de cadastro</label>
													<div class="col-md-9">
														<input class="form-control form-control-inline input-medium date-picker" value="{{ $dtcadastro }}" name="dtcadastro" placeholder="Clique no campo para selecionar" size="16" type="text" value="">
													</div>
												</div>

                                                {!! $categorias !!}
                                                {!! $campos !!}

												<div class="form-group">
													<div class="col-md-12">
														<textarea name="texto" id="summernote_1"></textarea>
													</div>
												</div>
											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<a href="{{ '/pagina/form/'.$codpagina }}" class="btn default">Cancelar</a>
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
