{!! $header !!}
<script>

	$(function(){
		$("#responseList").hide();

		$("#listimagem").sortable({
			opacity: 0.8,
			cursor: 'move',
			update: function() {

				var order = $(this).sortable("serialize") + '&update=update' + '&codconteudo={{$codconteudo}}';

				$.post("/pagina/arrayorderimg/", order, function(theResponse){
					$("#responseList").html(theResponse);
					$("#responseList").fadeIn();
					setTimeout(function(){
						("#responseList").fadeOut();
					}, 3000);

				});
			}
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
					<h1>Imagens <small>{{ $pagina }} / {{ $titulo }}</small></h1>
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
					<a href="{{ '/pagina/form/'.$codpagina.'/' }}">{{ $pagina }}</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="/">Imagens</a>
				</li>
				<li>
					/ {{ $titulo }}
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


                            <form action="/pagina/imagens/{{$codpagina}}/{{$codconteudo}}" method="post" enctype="multipart/form-data">
                                @csrf
								<div class="row fileupload-buttonbar">
									<div class="col-lg-7">
										<span class="btn green fileinput-button">
											<i class="fa fa-plus"></i>
											<span> Add imagem... </span>
											<input type="file" name="imagens[]" multiple>
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
									<tbody class="files" id="listimagem">
                                        @foreach($imagens as $image)
                                        <tr class="template-download" valign="middle" id="arrayorder_{{ $image->codimage }}">
                                            <td valign="middle">
                                                <span class="preview">
                                                    <a href="{{ "https://lewe.nyc3.digitaloceanspaces.com/uploads/galeria/".$image->imagem }}" target="_blank" data-gallery><img src="{{ "https://lewe.nyc3.digitaloceanspaces.com/uploads/galeria/".$image->imagem }}" width="90" /></a>
                                                </span>
                                            </td>
                                            <td valign="middle">
                                                <a href="{{ '/pagina/delimg/'.$image->codimage }}" class="btn red delete btn-sm" >
                                                    <i class="fa fa-trash-o"></i>
                                                    <span>Excluir</span>
                                                </a>
{{--                                                <a href="{{ '/pagina/crop/'.$codpagina.'/'.$image->codconteudo.'/'.$image->codimage.'/' }}" class="btn blue edit btn-sm" >--}}
{{--                                                    <i class="fa fa-pencil-square-o"></i>--}}
{{--                                                    <span>Editar Imagem</span>--}}
{{--                                                </a>--}}
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
											O tamanho máximo de arquivo para uploads é <strong> 5 MB </strong> (tamanho padrão do arquivo é ilimitado).
										</li>
										<li>
											Somente arquivos de imagem (<strong> JPG, GIF, PNG </strong>) são permitidos nesta demo (por padrão não há nenhuma restrição tipo de arquivo).
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


