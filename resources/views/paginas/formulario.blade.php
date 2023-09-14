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
					<h1>Página <small>{{$pagina}}</small></h1>
				</div>
				<!-- END PAGE TITLE -->

			</div>
			<!-- END PAGE HEAD -->

			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">

                <div class="col-md-12">

                    {!! ($retorno)? $retorno : '' !!}

                    <div class="note note-success note-shadow" style="display: none" id="responseList"></div>

                    <div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
                        <div class="tab-content">

                            <div class="form-actions top">
                                <div class="row">
                                    <div class="col-md-9">
                                        <a href="#cadastro" class="btn green">Cadastar Novo</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane active" id="tab_0">
                                <div class="portlet box ">
                                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                                    <div class="portlet box">
                                        <div class="portlet-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="tbDatatable">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            TÍTULO
                                                        </th>
                                                        <th>
                                                            AÇÕES
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="listconteudo">
                                                        @foreach($conteudos as $row)
                                                        <tr valign="middle" id="arrayorder_{{$row->codconteudo}}">
                                                            <td valign="middle">
                                                                {{$row->titulo}}
                                                            </td>
                                                            <td>
                                                                <a href="{{'/pagina/comentarios/'.$row->codpagina.'/'.$row->codconteudo.'/'}}" class="btn btn-default" title="Arquivos"><i class="fa fa-commenting-o"></i></a>
                                                                <a href="{{'/pagina/arquivos/'.$row->codpagina.'/'.$row->codconteudo.'/'}}" class="btn btn-success" title="Arquivos"><i class="fa fa-file-archive-o"></i></a>
                                                                <a href="{{'/pagina/imagens/'.$row->codpagina.'/'.$row->codconteudo.'/'}}" class="btn btn-warning" title="Imagens"><i class="fa fa-picture-o"></i></a>
                                                                <a href="{{'/pagina/editarConteudo/'.$row->codpagina.'/'.$row->codconteudo.'/'}}" class="btn btn-info" title="Editar"><i class="fa fa-edit"></i></a>
                                                                <a href="{{'/pagina/excluirConteudo/'.$row->codpagina.'/'.$row->codconteudo.'/'}}" class="btn btn-danger" title="Excluir"><i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
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

				<div class="col-md-12">

					<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed" id="cadastro">

						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box yellow">
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="{{'/pagina/form/'.$codpagina}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            <div class="form-actions top">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <button type="submit" class="btn green">Salvar</button>
                                                        <a href="/" class="btn default">Cancelar</a>
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
																<input type="text" name="title" class="form-control" placeholder="Preencha o campo">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-2 control-label">Description</label>
															<div class="col-md-10">
																<textarea name="description" class="form-control" placeholder="Preencha o campo"></textarea>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-2 control-label">Url Amigável</label>
															<div class="col-md-10">
																<input type="text" name="slug" id="slug" class="form-control" placeholder="Preencha o campo" >
																<span class="help-block" id="urlslug">www.seusite.com.br/</span>
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Título</label>
													<div class="col-md-9">
														<input type="text" name="titulo" class="form-control" placeholder="Preencha o campo" required>
														<!--  <span class="help-block"><code>A block of help text.</code> </span> -->
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Sub Título</label>
													<div class="col-md-9">
														<input type="text" name="subtitulo" class="form-control" placeholder="Preencha o campo">
														<!--  <span class="help-block"><code>A block of help text.</code> </span> -->
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Data de cadastro</label>
													<div class="col-md-9">
														<input class="form-control form-control-inline input-medium date-picker" name="dtcadastro" placeholder="Clique no campo para selecionar" size="16" type="text" value="">
													</div>
												</div>

                                                {!! $categorias !!}
                                                {!! $campos !!}

                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Adicionar imagens</label>
                                                    <div class="col-md-9">
                                                        <div class="row fileupload-buttonbar">
                                                            <div class="col-lg-7">
                                                                <span class="btn green fileinput-button">
                                                                    <i class="fa fa-plus"></i>
                                                                    <span> Adicionar imagen(s) </span>
                                                                    <input type="file" name="imagens[]" multiple>
                                                                </span>
                                                                <span class="fileupload-process">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Adicionar Arquivo</label>
                                                    <div class="col-md-9">
                                                        <div class="row fileupload-buttonbar">
                                                            <div class="col-lg-7">
                                                                <span class="btn blue fileinput-button">
                                                            <i class="fa fa-plus"></i>
                                                            <span> Adicionar Arquivo </span>
                                                            <input type="file" name="arquivo[]" >
                                                            </span>
                                                               <span class="fileupload-process">
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

												<div class="form-group">
													<div class="col-md-12">
														<textarea name="texto" id="summernote_1"></textarea>
													</div>
												</div>

											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-9">
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

<script>

    $(function(){

        $("#responseList").hide();

        $('#tbDatatable').DataTable({
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });

        $('#slug').keyup(function(){
            var slug = $('#slug').val();
            $('#urlslug').html('www.seusite.com.br/'+slug);
        });



    });

</script>

{!! $footer !!}
