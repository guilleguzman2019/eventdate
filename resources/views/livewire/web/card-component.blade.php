@extends('layouts.template')

@section('css')
    <link rel="stylesheet" href="{{asset('/build/assets/'.$card-> template -> name.'.css')}}">
@stop

@section('content')

	@php


	$timestamp=date('d-m-Y',strtotime($card -> start_date));

	
		
	@endphp
	@if(Request::url() === 'http://localhost:8000/panel/edit-invitacion/'.$card ->slug)
	<div>
		<div class="container">
			<div class="row">
			  <div class="col align-self-start">
				<button class="btn btn-success text-white" wire:click="save" wire:target="save">Actualizar</button>
			  </div>
			  <div class="col align-self-center">
				
			  </div>
			  <div class="col align-self-end">
				<button class="btn btn-primary" ><a style="color:white;" href="http://localhost:8000/invitacion/{{$card->slug}}">Ver</a></button>
			  </div>
			</div>
		</div>
	@endif
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
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
		@if(Request::url() === 'http://localhost:8000/panel/edit-invitacion/'.$card ->slug)
			<textarea  wire:model.defer="historia" rows="4" cols="50" style="background-color:transparent; color:#fcc779; font-family: 'Dancing Script'; font-size:20px; border: 0;">{{$card -> history_description}}</textarea>
		@else
			<p class="fm">{{$card -> history_description}}</p>
		@endif
		<br /><br />
		@if(Request::url() === 'http://localhost:8000/panel/edit-invitacion/'.$card ->slug)
			<input wire:model.defer="titulo" type="text" value="" style="width: 500px; background-color:transparent; color:#fcc779; font-family: 'Dancing Script' ; font-size:90px; border: 0;">
		@else
			<p class="fl">{{$card -> title}}</p>
		@endif
		<br />
		<br />
		<p class="fs">Fecha del Evento</p>
		@if(Request::url() === 'http://localhost:8000/panel/edit-invitacion/'.$card ->slug)
			<input class="date-input" wire:model.defer="fecha" type="date" value="" style="background-color:transparent; color:#fcc779; font-family: 'Dancing Script'; font-size:34px; border: 0;">
		@else
			<p class="date">{{$timestamp}}</p>
		@endif
		
	  </div>
	</div>
  </div>
	</div>

@stop

