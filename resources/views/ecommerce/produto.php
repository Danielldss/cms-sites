<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php	echo $menu; ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">

			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Produto <small>criar e editar produto</small></h1>
				</div>
				<!-- END PAGE TITLE -->

			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="<?php echo URL::base(true).'ecommerce/'; ?>">Home</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="<?php echo URL::base(true).'ecommerce/'; ?>">E-commerce</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Produto</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal form-row-seperated" id="frmproduto" method="post" action="<?php echo URL::base(true).'ecommerce/produtoEdit/'.$codproduto.'/'; ?>" enctype="multipart/form-data">
						<input type="hidden" value="<?php echo $codproduto; ?>" name="codproduto" id="codproduto"/>
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-basket font-green-sharp"></i>
									<span class="caption-subject font-green-sharp bold uppercase">Produto </span>
								</div>
								<div class="actions btn-set">
									<a class="btn btn-sm blue btn-circle" href="<?php echo URL::base(true); ?>ecommerce/produtoNew/"><i class="fa fa-plus"></i> Adicionar</a>
									<a type="button" class="btn btn-default btn-circle" href="<?php echo URL::base(true).'ecommerce/produtoCancel/'.$codproduto; ?>"><i class="fa fa-angle-left"></i>  Excluir</a>
									<button class="btn btn-default btn-circle " type="reset"><i class="fa fa-reply"></i> Limpar campos</button>
									<button class="btn green-haze btn-circle" type="submit"><i class="fa fa-check"></i> Salvar</button>
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">Geral </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">Meta tags</a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">Imagens</a>
										</li>
										<li>
											<a href="#tab_variacao" data-toggle="tab">Variações</a>
										</li>
										<li>
											<a href="#tab_grupo" data-toggle="tab">Grupo de produto</a>
										</li>
										<li>
											<a href="<?php echo URL::base(true).'ecommerce/produtosRelacionados/'.$codproduto.'/'; ?>">Produtos Relacionados</a>
										</li>
										<li>
											<a href="<?php echo URL::base(true).'ecommerce/produtoAvaliacoes/'.$codproduto.'/'; ?>">Avaliações</a>
										</li>
									</ul>
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">

												<div class="form-group">
													<label class="col-md-2 control-label">Nome: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="produto[nome]" value="<?php echo $produto; ?>" placeholder="" required>
													</div>
												</div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">URL do produto: <span class="required">
													* </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="produto[slug]" value="<?php echo $slug; ?>" placeholder="" required>
                                                    </div>
                                                </div>
												<div class="form-group">
													<label class="col-md-2 control-label">Cód SKU (Referência):
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" value="<?php echo $refproduto; ?>" name="produto[refproduto]" placeholder="0001">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Valor: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" value="<?php echo $valor; ?>" data-mask="decimal" name="produto[valor]" placeholder="0,00" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Valor Promocional:
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" value="<?php echo $valorpromo; ?>" data-mask="decimal" name="produto[valorpromo]" placeholder="0,00">
														<span class="help-block">valor promocional para este produto.</span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Desconto a vista (%):
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" data-mask="numerico" value="<?php echo $desconto; ?>" name="produto[desconto]" placeholder="" />
														<span class="help-block">desconto em caso de pagamento a vista.</span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Quantidade de parcelas:
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" data-mask="numerico" value="<?php echo $parcelas; ?>" name="produto[parcelas]" placeholder="" />
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Quantidade (estoque):
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" value="<?php echo $quantidade; ?>" data-mask="numerico" name="produto[quantidade]" placeholder="" />
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Descrição Curta: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<textarea class="form-control" name="produto[descricao_curta]" ><?php echo $descricao_curta; ?></textarea>
														<span class="help-block">mostrado na lista de produtos </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Descrição:
													</label>
													<div class="col-md-10">
														<textarea name="produto[descricao]" id="summernote_1"><?php echo $descricao; ?></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Cor:
													</label>
													<div class="col-md-10">
														<select class="form-control" name="produto[codcor]">
															<option value="">Selecione...</option>
															<?php echo $cores; ?>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Marca:
													</label>
													<div class="col-md-10">
														<select class="form-control" name="produto[codmarca]">
															<option value="">Selecione...</option>
															<?php echo $marcas; ?>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Departamentos / Categorias:
													</label>
													<div class="col-md-10">
														<div class="form-control height-auto">
															<div class="scroller" style="height:275px;" data-always-visible="1">
																<ul class="list-unstyled">
																	<?php echo $departamentos; ?>
																</ul>
															</div>
														</div>
														<span class="help-block">pode selecionar uma ou mais. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Peso (g):
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="produto[peso]" value="<?php echo $peso; ?>" placeholder="100g" >
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Dimensões (A x L x C) (cm):
													</label>
													<div class="col-md-2">
														<input type="text" class="form-control" name="produto[altura]" placeholder="Altura" value="<?php echo $altura; ?>" >
													</div>
													<div class="col-md-4">
														<input type="text" class="form-control" name="produto[largura]" placeholder="Largura" value="<?php echo $largura; ?>" >
													</div>
													<div class="col-md-4">
														<input type="text" class="form-control" name="produto[comprimento]" placeholder="Comprimento" value="<?php echo $comprimento; ?>" >
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Frete grátis: <span class="required"> * </span>
													</label>
													<div class="col-md-10">
														<select class="table-group-action-input form-control input-medium" name="produto[fretegratis]" required>
															<?php if($fretegratis == 'N'){
																$nselect = 'selected';
															}else{
																$sselect = 'selected';
															} ?>
															<option value="N" <?php echo @$nselect; ?>>Não</option>
															<option value="S" <?php echo @$sselect; ?>>Sim</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Produto tipo: <span class="required"> * </span>
													</label>
													<div class="col-md-10">
														<select class="table-group-action-input form-control input-medium" name="produto[tipo]" required>
															<?php
                                                                if($tipo == 'F'){
                                                                    $fselect = 'selected';
                                                                }else if($tipo == 'M'){
                                                                    $mselect = 'selected';
                                                                }else{
                                                                    $uselect = 'selected';
                                                                }
															?>
															<option value="M" <?php echo @$mselect; ?>>Masculino</option>
															<option value="F" <?php echo @$fselect; ?>>Feminino</option>
															<option value="U" <?php echo @$uselect; ?>>Unisexx</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Produto em destaque: <span class="required"> * </span>
													</label>
													<div class="col-md-10">
														<select class="table-group-action-input form-control input-medium" name="produto[destaque]" required>
															<?php if($destaque == 'N'){
																$ndestaque = 'selected';
															}else{
																$sdestaque = 'selected';
															} ?>
															<option value="N" <?php echo @$ndestaque; ?>>Não</option>
															<option value="S" <?php echo @$sdestaque; ?>>Sim</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Lançamento: <span class="required"> * </span>
													</label>
													<div class="col-md-10">
														<select class="table-group-action-input form-control input-medium" name="produto[lancamento]" required>
															<?php if($lancamento == 'N'){
																$nlanc = 'selected';
															}else{
																$slanc = 'selected';
															} ?>
															<option value="N" <?php echo @$nlanc; ?>>Não</option>
															<option value="S" <?php echo @$slanc; ?>>Sim</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Status: <span class="required"> * </span>
													</label>
													<div class="col-md-10">
														<select class="table-group-action-input form-control input-medium" name="produto[status]" required>
															<option value="">Selecione...</option>
															<?php if($status == 'A'){
																$publicado = 'selected';
															}else{
																$inativo = 'selected';
															} ?>
															<option value="A" <?php echo @$publicado; ?>>Publicado</option>
															<option value="I" <?php echo @$inativo; ?>>Inativo</option>
														</select>
													</div>
												</div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Prazo de entrega do produto (Apenas o número de dias):
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="produto[prazo]" value="<?php echo $prazo; ?>" placeholder="15" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Produto para:
                                                    </label>
                                                    <div class="col-md-10">
                                                        <select class="table-group-action-input form-control input-medium" name="produto[tipo_produto]" required>
                                                            <?php if($tipo_produto == 'venda'){
                                                                $venda = 'selected';
                                                            }else{
                                                                $orcamento = 'selected';
                                                            } ?>
                                                            <option value="venda" <?php echo @$venda; ?>>Venda</option>
                                                            <option value="orcamento" <?php echo @$orcamento; ?>>Orçamento</option>
                                                        </select>
                                                    </div>
                                                </div>

											</div>
										</div>
										<div class="tab-pane" id="tab_meta">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label">Meta Title:</label>
													<div class="col-md-10">
														<input type="text" class="form-control maxlength-handler" value="<?php echo $produto; ?>" name="produto[meta_title]" maxlength="100" placeholder="">
														<span class="help-block">
														max 100 chars </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Meta Keywords:</label>
													<div class="col-md-10">
														<textarea class="form-control maxlength-handler" rows="8" name="produto[meta_keywords]" maxlength="1000"><?php echo $keyword; ?></textarea>
														<span class="help-block">
														max 1000 chars </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Meta Description:</label>
													<div class="col-md-10">
														<textarea class="form-control maxlength-handler" rows="8" name="produto[meta_description]" maxlength="255"><?php echo $description; ?></textarea>
														<span class="help-block">
														max 255 chars </span>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab_images">
											<br />
											<div class="row fileupload-buttonbar">
												<div class="col-lg-7">
													<span class="btn green fileinput-button">
														<i class="fa fa-plus"></i>
														<span> Add imagem... </span>
														<input type="file" id="file" name="imagens[]" multiple>
													</span>
													<button type="submit" class="btn blue" >
														<i class="fa fa-upload"></i>
														<span> Iniciar upload </span>
													</button>
													<span class="fileupload-process">
													</span>
												</div>
											</div>
											<br />
											<table class="table table-bordered table-hover">
											<thead>
											<tr role="row" class="heading">
												<th width="8%">
													 Imagem
												</th>
												<th width="25%">
													 Title
												</th>
												<th width="10%">
													 Imagem normal
												</th>
												<th width="10%">
													 Imagem principal
												</th>
												<th width="10%">
													 Imagem de capa
												</th>
												<th width="10%">
												</th>
											</tr>
											</thead>
											<tbody>

											<?php echo $imagens; ?>

											</tbody>
											</table>
										</div>

										<div class="tab-pane" id="tab_variacao">
											<div class="note note-success note-shadow" id="returnVariacao" style="display: none;"><p>Variação foi insedido com sucesso!</p></div>
											<div class="note note-success note-shadow" id="returnEditVariacao" style="display: none;"><p>Variação foi atualizada com sucesso!</p></div>
											<div class="form-body" id="frmVariacao">
												<div class="form-group" id="divaddvar">
													<label class="col-md-2 control-label">Variação de produto:</label>
													<div class="col-md-8">
														<select class="form-control" name="codvariacao" id="codvariacao">
															<?php echo $variacao; ?>
														</select>
													</div>
													<div class="col-md-2">
														<button type="button" id="btnVariacao" class="btn blue">Adicionar</button>
													</div>
												</div>

												<div class="form-group" id="diveditvar" style="display: none;">
													<label class="col-md-2 control-label">Variação de produto:</label>
													<div class="col-md-8">

													</div>
													<div class="col-md-2">
														<button type="button" id="btnEditVariacao" class="btn blue">Atualizar</button>
													</div>
												</div>

												<div class="form-group">
													<div class="col-md-2"></div>
													<div class="col-md-2">
														<label>Variação (Ex: M)</label>
														<input type="text" class="form-control" name="valvariacao" id="valvariacao" placeholder="Variação (Ex: M)">
														<input type="hidden" class="form-control" name="codvariacaoEdit" id="codvariacaoEdit">
														<input type="hidden" class="form-control" name="codval" id="codval">
													</div>
													<div class="col-md-2">
														<label>Cod SKU</label>
														<input type="text" class="form-control" name="codref" id="codref" id="Cod SKU" placeholder="001">
													</div>
													<div class="col-md-2">
														<label>Valor (0,00)</label>
														<input type="text" class="form-control" data-mask="decimal" name="preco" id="preco" placeholder="Valor (0,00)">
													</div>
                                                    <div class="col-md-2">
														<label>Valor Promocional (0,00)</label>
                                                        <input type="text" class="form-control" data-mask="decimal" name="preco_promocional" id="preco_promocional" placeholder="Valor Promocional (0,00)">
                                                    </div>
												</div>
												<div class="form-group">
													<div class="col-md-2"></div>
													<div class="col-md-2">
														<label>Peso (150g)</label>
														<input type="text" class="form-control" name="peso" id="peso" data-mask="numerico" placeholder="Peso (150g)">
													</div>
													<div class="col-md-2">
														<label>Largura (150cm)</label>
														<input type="text" class="form-control" name="largura" id="largura" data-mask="numerico" placeholder="Largura (150cm)">
													</div>
													<div class="col-md-2">
														<label>Altura (150cm)</label>
                                                        <input type="text" class="form-control" name="altura" id="altura" data-mask="numerico" placeholder="Altura (150cm)">
													</div>
													<div class="col-md-2">
														<label>Comprimento (150cm)</label>
                                                        <input type="text" class="form-control" name="comprimento" id="comprimento" data-mask="numerico" placeholder="Comprimento (150cm)">
													</div>
												</div>
                                                <div class="form-group">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-2">
														<label>Quantidade em estoque</label>
                                                        <input type="text" class="form-control" data-mask="numerico" name="quantidade" id="quantidade" placeholder="Quantidade em estoque">
                                                    </div>
                                                </div>
											</div>
											<div class="portlet-body">
												<div class="table-container" id="tableVariacao"></div>
											</div>

										</div>

										<div class="tab-pane" id="tab_grupo">
											<div class="note note-success note-shadow" id="returnGrupo" style="display: none;"><p>Grupo foi insedido com sucesso!</p></div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label">Grupo de produto:</label>
													<div class="col-md-9">
														<select class="form-control maxlength-handler" name="produto[codgrupo]" id="codgrupo">
															<option value="">Selecione..</option>
															<?php echo $grupos; ?>
														</select>
														<span class="help-block">Agrupamento de produtos do mesmo modelo com cores distintas.</span>
													</div>
													<div class="col-md-1">
														<button class="btn blue" id="btnGrupo" type="button"><i class="fa fa-plus"></i></button>
													</div>
												</div>
												<div class="form-group hidden" id="campoGrupo">
													<label class="col-md-2 control-label">Adicionar grupo de produto:</label>
													<div class="col-md-9">
														<input type="text" class="form-control maxlength-handler" name="grupo" id="grupo" maxlength="255" placeholder="MOLETON NIKE">
													</div>
													<div class="col-md-1">
														<button class="btn blue" type="button" id="btnAddGrupo"><i class="fa fa-check"></i></button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="portlet-title">
								<div class="actions btn-set">
									<a type="button" class="btn btn-default btn-circle" href="<?php echo URL::base(true).'ecommerce/produtoCancel/'.$codproduto; ?>"><i class="fa fa-angle-left"></i>  Excluir</a>
									<button class="btn btn-default btn-circle " type="reset"><i class="fa fa-reply"></i> Limpar campos</button>
									<button class="btn green-haze btn-circle" type="submit"><i class="fa fa-check"></i> Salvar</button>
								</div>
							</div>

						</div>
					</form>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		2015 © LigDoctor CMS.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo URL::base(true); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/scripts/datatable.js"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/pages/scripts/ecommerce-products-edit.js"></script>
<script src="<?php echo URL::base(); ?>assets/global/scripts/meiomask.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>

function avaliacoes(){
	$('#tableAvaliacoes').load("<?php echo URL::base(true).'ecommerce/produtoListAvaliacoes/'.$codproduto; ?>");
}

function variacoes(){
	$('#tableVariacao').load("<?php echo URL::base(true).'ecommerce/produtoListVariacao/'.$codproduto; ?>");
}
function grupos(){
	$('#codgrupo').load("<?php echo URL::base(true).'ecommerce/produtoListGrupo/'; ?>");
}
function delvariacao(cod){
	var url = '<?php echo URL::base(true).'ecommerce/produtoDelVariacao/'; ?>';
	$('#tableVariacao').load(url+cod);
	variacoes();
}

function editvariacao(cod){
	var link = '<?php echo URL::base(true).'ecommerce/dadosVariacoes/'; ?>'+cod;
	var data = '';

	jQuery.ajax({
		type: "POST",
		url: link,
		complete: function(msg) {
			resp = JSON.parse(msg.responseText);

			$('#codvariacaoEdit').val(resp.codvariacao);
			$('#codval').val(resp.codval);
			$('#valvariacao').val(resp.valvariacao);
			$('#codref').val(resp.codref);
			$('#preco').val(resp.preco);
			$('#preco_promocional').val(resp.preco_promocional);
			$('#peso').val(resp.peso);
			$('#largura').val(resp.largura);
			$('#comprimento').val(resp.comprimento);
			$('#altura').val(resp.altura);
			$('#quantidade').val(resp.quantidade);

			$('#divaddvar').hide();
			$('#diveditvar').show();

		}
	});

}

jQuery(document).ready(function(e) {

	$('input[data-mask]').each(function() {
    	var input = $(this);
        input.setMask(input.data('mask'));
	});

	variacoes();

	/*begin cadastro grupo de produto*/
		$('#btnGrupo').click(function(){
			$('#campoGrupo').removeClass('hidden');
		});
		$('#btnAddGrupo').click(function(){
			var data = {
				grupo: $('#grupo').val()
			}
			$.ajax({
	          type:	"POST",
	          url:	"<?php echo URL::base(true).'ecommerce/produtoAddGrupo/'; ?>",
	          data:	data,
	          success: function(){
		        $('#returnGrupo').fadeIn();
				$('#grupo').val('');
				$('#campoGrupo').addClass('hidden');
				grupos();
				setTimeout(function(){
					$('#returnGrupo').fadeOut();
				}, 2000)
			  },
			  error: function(){
				alert('erro');
				$('#campoGrupo').addClass('hidden');
				$('#grupo').val('');
			  }
	        });
		});
	/*end cadastro grupo de produto*/

	/*begin cadastro de variação*/
		$('#btnVariacao').click(function(){
			var data = {
				valvariacao:	$('#valvariacao').val(),
				preco: 			$('#preco').val(),
                preco_promocional: $('#preco_promocional').val(),
				quantidade: 	$('#quantidade').val(),
				peso: 			$('#peso').val(),
				largura: 		$('#largura').val(),
				comprimento:	$('#comprimento').val(),
				altura: 		$('#altura').val(),
				codvariacao: 	$('#codvariacao').val(),
				codproduto: 	$('#codproduto').val(),
				codref:			$('#codref').val()
			}
			$.ajax({
	          type:	"POST",
	          url:	"<?php echo URL::base(true).'ecommerce/produtoAddVariacao/'; ?>",
	          data:	data,
	          success: function(){
		        $('#returnVariacao').fadeIn();
				$('#frmVariacao input').val('');
				variacoes();
				setTimeout(function(){
					$('#returnVariacao').fadeOut();
				}, 2000)
			  },
			  error: function(){
				alert('erro');
				$('#frmVariacao input[type=text]').val('');
			  }
	        });
		});

		$('#btnEditVariacao').click(function(){

			var data = {
				valvariacao:	$('#valvariacao').val(),
				preco: 			$('#preco').val(),
                preco_promocional: $('#preco_promocional').val(),
				quantidade: 	$('#quantidade').val(),
				peso: 			$('#peso').val(),
				largura: 		$('#largura').val(),
				comprimento:	$('#comprimento').val(),
				altura: 		$('#altura').val(),
				codvariacaoEdit:$('#codvariacaoEdit').val(),
				codref:			$('#codref').val(),
				codval:			$('#codval').val(),
			}
			$.ajax({
	          type:	"POST",
	          url:	"<?php echo URL::base(true).'ecommerce/produtoEditVariacao/'; ?>",
	          data:	data,
	          success: function(){
		        $('#returnEditVariacao').fadeIn();
				$('#frmVariacao input').val('');

				variacoes();
				setTimeout(function(){
					$('#returnVariacao').fadeOut();
				}, 2000);

				$('#diveditvar').hide();
				$('#divaddvar').show();
			  },
			  error: function(){
				alert('erro');

				$('#frmVariacao input[type=text]').val('');

				$('#diveditvar').hide();
				$('#divaddvar').show();
			  }
	        });
		});
	/*end cadastro de variação*/

	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features

});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
