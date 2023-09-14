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
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">

				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Inicio <small>Relatórios</small></h1>
				</div>
				<!-- END PAGE TITLE -->

			</div>
			<!-- END PAGE HEAD -->

			<div class="row">
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light tasks-widget">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase">LOGS EXECUTADOS</span>
							</div>
						</div>
						<div class="portlet-body">
							<div class="task-content">
								<div class="scroller" style="height: 282px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">

									<ul class="task-list">

										@foreach ($logs as $log)
                                        <li>
                                            <div class="task-title">
                                                <span class="task-title-sp">{{$log->valor}}</span>
                                            </div>
                                        </li>
                                        @endforeach

									</ul>
									<!-- END START TASK LIST -->
								</div>
							</div>

						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="dashboard-stat2">
							<div class="display">
								<div class="number">
									<h3 class="font-green-sharp">{{$emails}}</h3>
									<small>E-MAILS CADASTRADOS</small>
								</div>
								<div class="icon">
									<i class="fa fa-envelope"></i>
								</div>
								<br clar="all" /><br /><br /><br />
{{--								<a href="<?php echo URL::base(true).'relatorio/emails/'; ?>" class="btn default">Detalhar</a>--}}
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="dashboard-stat2">
							<div class="display">
								<div class="number">
									<h3 class="font-blue-sharp">{{$acessos}}</h3>
									<small>TOTAL DE VISITAS</small>
								</div>
								<div class="icon">
									<i class="fa fa-bar-chart"></i>
								</div>
								<br clar="all" /><br /><br /><br />
{{--								<a href="<?php echo URL::base(true).'relatorio/acessos/'; ?>" class="btn default">Detalhar</a>--}}
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="dashboard-stat2">
							<div class="display">
								<div class="number">
									<h3 class="font-red-haze">{{$downloads}}</h3>
									<small>TOTAL DE DOWNLOADS</small>
								</div>
								<div class="icon">
									<i class="fa fa-download"></i>
								</div>
								<br clar="all" /><br /><br /><br />
{{--								<a href="<?php echo URL::base(true).'relatorio/downloads/'; ?>" class="btn default">Detalhar</a>--}}
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="dashboard-stat2">
							<div class="display">
								<div class="number">
									<h3 class="font-purple-soft">{{$visitas}}</h3>
									<small>VISITAS DE HOJE</small>
								</div>
								<div class="icon">
									<i class="fa fa-users"></i>
								</div>
								<br clar="all" /><br /><br /><br />
{{--								<a href="<?php echo URL::base(true).'relatorio/visitas/'; ?>" class="btn default">Detalhar</a>--}}
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
{!! $footer !!}
