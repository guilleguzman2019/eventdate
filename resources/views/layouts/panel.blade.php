<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }} {{ $titlePage ?? '' }}</title>

		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


		<!-- Styles -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

		<!-- Styles -->
		@livewireStyles
	</head>

	<body>

		<nav>
		</nav>

		@include('partials.panel.nav')

		<main>
			<div class="container-fluid p-sm-4 p-3">
				<div class="d-flex justify-content-between align-items-center mb-3">
					<div>
						<img src="{{ asset('img/logo-ico.svg') }}" width="48" class="d-block d-sm-none">
					</div>

					<div class="d-flex">
						<div class="dropdown">
							<button class="border-0 bg-transparent p-0 m-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								@if ( Auth::user() -> profile_photo_path ) 
									@php
										$photo = asset(Auth::user() -> profile_photo_path);
									@endphp
								@elseif ( Auth::user() -> socialProfiles -> count() )
									@php
										$photo = Auth::user() -> socialProfiles -> first() -> social_avatar;
									@endphp
								@else
									@php
										$photo = Auth::user() -> profile_photo_url;
									@endphp
								@endif

								<img class="rounded-4" width="50" height="50" src="{{ $photo }}" alt="{{ Auth::user()->name }}" />
							</button>
							<ul class="dropdown-menu dropdown-menu-end border-0 shadow">
								<li><a class="dropdown-item" href="{{ route('panel.dashboard') }}">Panel</a></li>
								<li><a class="dropdown-item" href="#">Perfil</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" onclick="event.preventDefault(); $('form.logout').submit();" href="{{ route('logout') }}">Cerrar sesión</a></li>
							</ul>
						</div>

						<button class="btn btn-light rounded-4 border ms-2 d-sm-none" onclick="$('nav.menu-nav').toggleClass('view')"><img src="{{ asset('img/icos/ico-lines.svg') }}" width="24"></button>
					</div>
				</div>
			</div>
			<div class="container pb-4">
				{{ $slot }}
			</div>
		</main>

		<form method="POST" class="logout" action="{{ route('logout') }}" x-data>
			@csrf
		</form>

		@stack('modals')

		{{-- TOASTs --}}
		<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
			<div id="liveToastSaved" class="toast bg-success text-white rounded-3" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="d-flex justify-content-between align-items-center pe-2">
					<div class="toast-body">Guardado correctamente</div>
					<button type="button" class="btn-close f-invert" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
			</div>

			<div id="liveToastUpdated" class="toast bg-primary text-white rounded-3" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="d-flex justify-content-between align-items-center pe-2">
					<div class="toast-body">Actualizado correctamente</div>
					<button type="button" class="btn-close f-invert" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
			</div>

			<div id="liveToastDeleted" class="toast bg-danger text-white rounded-3" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="d-flex justify-content-between align-items-center pe-2">
					<div class="toast-body">Eliminado correctamente</div>
					<button type="button" class="btn-close f-invert" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
			</div>

			{{ $toast ?? '' }}
		</div>

		@livewireScripts

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


		<script type="text/javascript">
			window.livewire.on('saved', () => {
				$('.offcanvas').offcanvas('hide');
				$('.modal').modal('hide');
				var toast = new bootstrap.Toast(document.getElementById('liveToastSaved'))
				toast.show()
			})
			window.livewire.on('updated', () => {
				$('.offcanvas').offcanvas('hide');
				$('.modal').modal('hide');
				var toast = new bootstrap.Toast(document.getElementById('liveToastUpdated'))
				toast.show()
			})
			window.livewire.on('deleted', () => {
				$('.offcanvas').offcanvas('hide');
				$('.modal').modal('hide');
				var toast = new bootstrap.Toast(document.getElementById('liveToastDeleted'))
				toast.show()
			})
			window.livewire.on('deletedNoClose', () => {
				var toast = new bootstrap.Toast(document.getElementById('liveToastDeleted'))
				toast.show()
			})
		</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


		<script src="{{asset('/build/assets/template1.js')}}"></script>

		

		@stack('scripts')
	</body>
</html>
