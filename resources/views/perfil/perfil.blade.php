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
					<h1>Meu Perfil </h1>
				</div>
				<!-- END PAGE TITLE -->
			</div>
			<!-- END PAGE HEAD -->

			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row profile">
				<div class="col-md-12">
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom tabbable-noborder">
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1_1">
								<div class="row">
									<div class="col-md-3">
										<ul class="list-unstyled profile-nav">
											<li>
												<img src="{{ $imaegm }}" class="img-responsive" alt=""/>
												<br />
												<form id="fileupload" action="/perfil/upload" method="post" enctype="multipart/form-data">
                                                    @csrf
													<div class="row fileupload-buttonbar">
														<div class="col-lg-5">
															<span class="btn green fileinput-button">
																<i class="fa fa-plus"></i>
																<span>Alterar Foto... </span>
																<input type="file" name="imagem" onchange="$('form#fileupload').submit();">
															</span>
														</div>
													</div>
												</form>
											</li>
										</ul>
									</div>
									<div class="col-md-9">
										<form action="/perfil" id="frmacount" method="post">
                                            @csrf
											<div class="form-group">
												<label class="control-label">Nome</label>
												<input type="text" name="nome" value="{{ \Illuminate\Support\Facades\Session::get('nome') }}" class="form-control"/>
											</div>

											<div class="form-group">
												<label class="control-label">E-mail</label>
												<input type="email" name="email" value="{{ \Illuminate\Support\Facades\Session::get('email') }}" class="form-control"/>
											</div>

											<div class="form-group">
												<label class="control-label">Senha</label>
												<input type="password" name="senha" placeholder="Digite uma nova senha para alterar" class="form-control"/>
											</div>

											<div class="form-group">
												<label class="control-label">Confirme a senha</label>
												<input type="password" name="csenha" placeholder="Confirme a senha para alterar" class="form-control"/>
											</div>

											<div class="margiv-top-10">
												<input type="submit" class="btn green" value="Salvar" onsubmit="$('#frmacount').submit()" />
											</div>
										</form>
									</div>
								</div>
							</div>
							<!--end tab-pane-->
						</div>
					</div>
					<!--END TABS-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
{!! $footer !!}
