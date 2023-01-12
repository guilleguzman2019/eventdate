@extends('layouts.template')

@section('css')
    <link rel="stylesheet" href="{{asset('/build/assets/'.$card-> template -> name.'.css')}}">
@stop



	@php


	$timestamp=date('Y-m-d',strtotime($card -> start_date));

	
		
	@endphp

	@if(Request::get('edit'))
	<div>
		<div class="container">
			<div class="row">
			  <div class="col align-self-start">
				<button id="boton" class="btn btn-success text-white" wire:click="save" wire:target="save" style="font-size: 20px;">Actualizar</button>
			  </div>
			  <div class="col align-self-center">
				
			  </div>
			  <div class="col align-self-end">
				{{--<button class="btn btn-primary" ><a style="color:white;" href="http://localhost:8000/invitacion/{{$card->slug}}">Ver</a></button>--}}
			  </div>
			</div>
		</div>
		
	

	<br>
		<br>
		<br>
		<br>
		<br>
@endif
<div class="main-card">
	<div class="border">

		
		<div class="image-upload img-top">
			<label for="file-input">
				<img src="{{ asset(($image) ? $image -> temporaryUrl() : 'img/invitacion/flor.png') }}"/>
			</label>
			<input class="file-input imageUpload float-start" type="file" accept=".jpg,.png,.jpeg" wire:model.defer="image" style="height: 1px; opacity: 0; overflow: hidden; width: 1px;">
		</div>

		<div class="image-upload img-bottom">
			<label for="file-input">
				<img src="{{ asset(($image) ? $image -> temporaryUrl() : 'img/invitacion/flor.png') }}"/>
			</label>
		
			<input id="file-input" type="file" wire:model="image"/>
		</div>
  
	  <div class="text-content">
		@if(Request::get('edit'))
			<textarea class="fm" wire:model.defer="historia" rows="4" cols="50" style="background-color:transparent; color:#fcc779; font-family: 'Dancing Script'; font-size:20px; border: 0; overflow:hidden;">{{$card -> history_description}}</textarea>
		@else
			<p class="fm">{{$card -> history_description}}</p>
		@endif
		<br /><br />
		@if(Request::get('edit'))
			<input wire:model.defer="titulo" type="text" value="{{$card->title}}" style="width: 500px; background-color:transparent; color:#fcc779; font-family: 'Dancing Script' ; font-size:90px; border: 0;">
		@else
			<p class="fl">{{$card -> title}}</p>
		@endif
		<br />
		<br />
		<p class="fs">Fecha del Evento</p>
		@if(Request::get('edit'))
			<input class="date-input" wire:model.defer="fecha" type="date" value="{{$timestamp}}" style="background-color:transparent; color:#fcc779; font-family: 'Dancing Script'; font-size:34px; border: 0;">
		@else
			<p class="date">{{$timestamp}}</p>
		@endif
		
	  </div>
	</div>
  </div>
	</div>






