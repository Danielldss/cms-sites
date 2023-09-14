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
					<h1>Arquivos <small>{{ $pagina }}</small></h1>
				</div>
				<!-- END PAGE TITLE -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="/">Home</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="{{'/pagina/form/'.$codpagina.'/' }}">{{ $pagina }}</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Arquivos</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="portlet light">
				<div class="portlet-body">
					<div class="row">
						<div class="col-md-12">

							{!! ($retorno)? $retorno : '' !!}

                            <form action="/pagina/arquivos/{{$codpagina}}/{{$codconteudo}}" method="post" enctype="multipart/form-data">
                                @csrf
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-2 control-label">Nome do arquivo</label>
										<div class="col-md-10">
											<input type="text" name="nome" class="form-control" placeholder="Preencha o campo" required>
										</div>
									</div>
								</div>
								<br clear="all" /><br />
								<div class="row fileupload-buttonbar">
									<div class="col-lg-7">
										<span class="btn green fileinput-button">
											<i class="fa fa-plus"></i>
											<span> Add Arquivo... </span>
											<input type="file" name="arquivo[]" required>
										</span>
										<button type="submit" class="btn blue">
											<i class="fa fa-upload"></i>
											<span> Iniciar upload </span>
										</button>
										<span class="fileupload-process">
										</span>
									</div>
								</div>
								<!-- The table listing the files available for upload/download -->
								<table role="presentation" class="table table-striped clearfix">
								<tbody class="files">
                                    @foreach($arquivos as $arquivo)
                                        <tr class="template-download" valign="middle">
                                            <td valign="middle">
                                            <span class="preview">
                                                <a href="{{ $arquivo->url.$arquivo->arquivo }}" target="_blank" class="btn default yellow-stripe"><i class="fa fa-file-archive-o"></i> {{ $arquivo->nome }} </a>
                                            </span>
                                            </td>
                                            <td valign="middle">
                                                <a href="{{ '/pagina/delarq/'.$codpagina.'/'.$codconteudo.'/'.$arquivo->codarquivo.'/' }} " class="btn red delete btn-sm" >
                                                    <i class="fa fa-trash-o"></i>
                                                    <span>Excluir</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
								</table>
							</form>
							<div class="panel panel-success">
								<div class="panel-heading">
									<h3 class="panel-title">Observações</h3>
								</div>
								<div class="panel-body">
									<ul>
										<li>
											O tamanho máximo de arquivo para uploads é <strong> 40 MB </strong>
										</li>
									</ul>
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

