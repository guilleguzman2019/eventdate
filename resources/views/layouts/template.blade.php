<!DOCTYPE html>
<html lang="en">
<head>

	@yield('head')

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

	@yield('css')

	
</head>

<body>
	<div>
		@yield('content') 
		@if( isset($slot) ) {{ $slot }} @endif
	</div>

	@yield('js')

	@livewireScripts

</body>
</html>