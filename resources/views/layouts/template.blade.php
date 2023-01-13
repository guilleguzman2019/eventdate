<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
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