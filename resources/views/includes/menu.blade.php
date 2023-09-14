
<div class="page-sidebar-wrapper">

		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

				<li class="start active">
					<a href="https://ligdoctor.com.br" target="_blank">
						<i class="fa fa-link"></i>
						<span class="title">ligdoctor.com.br</span>
					</a>
				</li>
				<li class="start ">
					<a href="/">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>

				<li class="open">
					<a href="javascript:;">
					<i class="icon-docs"></i>
					<span class="title">Institucional</span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu"  style="display: block;">
                        @foreach($paginas as $pagina)
                        <li>
                            <a href="{{'/pagina/form/'.$pagina->codpagina}}"><i class="fa fa-caret-right"></i> {{$pagina->pagina}}</a>
                        </li>
                        @endforeach
					</ul>
				</li>
				<li>
					<a href="/painel/seo">
						<i class="fa fa-google"></i>
						<span class="title">SEO</span>
					</a>
				</li>

			</ul>
			<!-- END SIDEBAR MENU -->
		</div>

	</div>
