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
					<h1>Comentários <small>{{ $pagina }} / {{ $titulo }}</small></h1>
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
					<a href="{{ '/pagina/form/'.$codpagina }}">{{ $pagina }}</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Comentários</a>
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

							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Nome</th>
											<th>E-mail</th>
											<th>Comentário</th>
											<td></td>
										</tr>
									</thead>
									<tbody>
                                    @foreach($comentarios as $comentario)
                                        <tr valign="middle">
                                            <td valign="middle">
                                                {{ $comentario->nome }}
                                            </td>
                                            <td valign="middle">
                                                {{ $comentario->email }}
                                            </td>
                                            <td valign="middle">
                                                {{ $comentario->comentario }}
                                            </td>
                                            <td>
                                                @if($comentario->ativo == 'S')
                                                    <a href="{{ '/pagina/statusComentario/'.$codpagina.'/'.$codconteudo.'/'.$comentario->codcomentario.'/N' }}" class="btn btn-warning" title="Reprovar"><i class="fa fa-ban"></i></a>
                                                @else
                                                    <a href="{{ '/pagina/statusComentario/'.$codpagina.'/'.$codconteudo.'/'.$comentario->codcomentario.'/S' }}" class="btn btn-success" title="Aprovar"><i class="fa fa-check"></i></a>
                                                @endif
                                                <a href="{{ '/pagina/excluirComentario/'.$codpagina.'/'.$codconteudo.'/'.$comentario->codcomentario.'/' }}" class="btn btn-danger" title="Excluir"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
									</tbody>
								</table>
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


