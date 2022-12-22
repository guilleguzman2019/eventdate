<nav class="position-fixed top-0 h-100 d-sm-flex flex-column justify-content-between menu-nav p-4 p-sm-0">
	<img src="{{ asset('img/logo-ico.svg') }}" width="56" class="d-none d-sm-block mx-auto mt-4">

	<div class="d-flex justify-content-between align-items-center d-sm-none border-bottom pb-4 mb-4">
		<h3 class="d-block d-sm-none text-uppercase fw-700 m-0">Dashboard</h3>
		<button class="bg-transparent border-0 p-0 m-0 fs-42 lh-1" onclick="$('nav.menu-nav').toggleClass('view')">&times;</button>
	</div>

	<ul class="list-unstyled text-center navigation">
		<li class="position-relative">
			<a href="{{ route('admin.dashboard') }}" class="d-sm-inline-block text-start d-block my-2 p-3 {{ request()->is('panel/tickets*') ? 'active' : '' }}">
				<img src="{{ asset('img/icos/ico-ticket.svg') }}" width="24" height="24" class="me-2 me-sm-0">
				<span class="text-dark py-sm-2 px-sm-3 rounded-3 text-nowrap">Dashboard</span>
			</a>
		</li>
		<li class="position-relative">
			<a href="{{ route('admin.categories') }}" class="d-sm-inline-block text-start d-block my-2 p-3 {{ request()->is('panel/eventos*') ? 'active' : '' }}">
				<img src="{{ asset('img/icos/ico-calendar.svg') }}" width="24" height="24" class="me-2 me-sm-0">
				<span class="text-dark py-sm-2 px-sm-3 rounded-3 text-nowrap">Categorias</span>
			</a>
		</li>
		<li class="position-relative">
			<a href="{{ route('admin.templates') }}" class="d-sm-inline-block text-start d-block my-2 p-3 {{ request()->is('panel/control-de-tickets*') ? 'active' : '' }}">
				<img src="{{ asset('img/icos/ico-scan.svg') }}" width="24" height="24" class="me-2 me-sm-0">
				<span class="text-dark py-sm-2 px-sm-3 rounded-3 text-nowrap">Template</span>
			</a>
		</li>
		<li class="position-relative">
			<a href="#" class="d-sm-inline-block text-start d-block my-2 p-3 {{ request()->is('panel/finanzas*') ? 'active' : '' }}">
				<img src="{{ asset('img/icos/ico-balance.svg') }}" width="24" height="24" class="me-2 me-sm-0">
				<span class="text-dark py-sm-2 px-sm-3 rounded-3 text-nowrap">Clientes</span>
			</a>
		</li>
		<li class="position-relative">
			<a href="#" class="d-sm-inline-block text-start d-block my-2 p-3 {{ request()->is('panel/reventas') ? 'active' : '' }}">
				<img src="{{ asset('img/icos/ico-sells.svg') }}" width="24" height="24" class="me-2 me-sm-0">
				<span class="text-dark py-sm-2 px-sm-3 rounded-3 text-nowrap">Usuarios</span>
			</a>
		</li>
	</ul>

	<ul class="list-unstyled text-center p-2 rounded-pill m-4 d-none d-sm-block bg-white">
		<li><a href="#" class="d-inline-block d-block py-2 rounded-circle overflow-hidden bg-secondary"><img src="{{ asset('img/icos/ico-sun.svg') }}" width="20" height="20" class="d-block mx-auto f-brightness"></a></li>
		<li><a href="#" class="d-inline-block d-block py-2 rounded-circle overflow-hidden"><img src="{{ asset('img/icos/ico-moon.svg') }}" width="20" height="20" class="d-block mx-auto"></a></li>
	</ul>
</nav>