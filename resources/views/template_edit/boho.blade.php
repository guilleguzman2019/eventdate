@extends('layouts.template')

@section('css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Meow+Script&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="{{asset('/build/assets/boho.css')}}">
@stop



<div>


<main>

	<div id="portada" class="m-0 vh-100 row justify-content-center align-items-center portada" style="background-image: url({{ asset(($image) ? $image -> temporaryUrl() : 'https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/MODELO-BODA-1-1.jpg') }})">
		<div class="col-1">
			<img class="imgizq" src="https://eleve11.ar/wp-content/uploads/2022/08/hojas.png" alt="">
		</div>
		<div class="col-10  text-center">
			<div id="my-button" style="display:none;">
				<label for="file-upload" class="botonhashtag">
					<img src="{{asset('/img/reemplazar.svg')}}" alt="" width="30px">
					  CAMBIAR PORTADA</label>
				<input wire:model.defer="image" id="file-upload" type="file" style="display: none" onchange="uploadFile(this.files)" />
			</div>
			<input class="tituloParejas transparente" wire:model.defer="ArrayInvitacion.title" type="text"  style="width:750px; width:100%">
			<input wire:model.defer="ArrayInvitacion.subtitle" class="titulo transparente" type="text" style="margin-top: 30px; width:350px !important;">
		</div>
		<div class="col-1">
			<img class="imgdech position-absolute" src="https://eleve11.ar/wp-content/uploads/2022/08/hojas-2.png" alt="">
		</div>
	  </div>
  

  <!--/.Main-->
  
  <!-- Outro -->
  <section id="historia">
  <div class="container">
	<div class="row text-xs-center p-t-1 p-b-4">
	  <div class="col-md-12 text-center p-5">
		<br>
		{{--<h3 class="tituloHistoria">Nuestra Historia</h3>--}}
		<input wire:model.defer="ArrayInvitacion.history_title" type="text" class="tituloHistoria transparente text-dark"   style="margin-bottom: 10px;  width:450px !important;">
		<br>
		{{--<p>Una propuesta, un Sí y una decisión que tomamos juntos. Nuestro amor ha crecido en nosotros, ha madurado y florecido, a veces sencillo, otras caótico pero siempre maravilloso.
  
		  Así comienza una nueva etapa en nuestras vidas. Somos aventureros, dedicados, fuertes de carácter; los desafíos que hemos enfrentado nos han ayudado a crecer y madurar; debemos agradecer a esos retos porque con ellos nos hemos dado cuenta que juntos podemos lograr lo que nos proponemos.
		  
		  Tan sólo podemos decir que nuestra vida en estos momentos se encuentra completa y estamos listos para compartir el resto de nuestros días juntos.</p>--}}
			<textarea wire:model.defer="ArrayInvitacion.history_description" class="textohistoria transparente text-dark" name="w3review" rows="8" cols="100" style="border: none; overflow:hidden;">
			</textarea>
	</div>
  </div>
  </section>

  <section id="eventos">
	<div class="container p-4">
	  <div class="row  p-0 m-0">
		<div class="col-md-12 text-center">

			<div class="carousel-wrap" wire:ignore>
				<div class="owl-carousel carousel-boho" wire:ignore>
	
					@foreach ($events as $e)
						<div class="item card p-4 two" wire:ignore>
							<img class="card-img-top" src="{{asset($e -> image)}}" alt="Card image cap" height="350px" width="150px">
							<div class="card-body">
								<h5 class="card-lugar">CATEGRAL DE CORDOBA</h5>
								<span class="card-text">Independencia 80, Cordoba</span>
								<br>
								<br>
								<a href="#" class="botonhashtag">VER UBICACION</a>
							</div>
						</div>
					@endforeach
	
				</div>
			  </div>
	  </div>
	</div>
	</section>

	<div id="main-bg">
		<div class="container">
		  <div class="row">
			<div class="col-12 text-center pt-3">
  
			  <div>
				<div id="countdown">
				  <ul>
					<li><span id="days" class="contador"></span>Dias</li>
					<li><span id="hours" class="contador"></span>hrs</li>
					<li><span id="minutes" class="contador"></span>Min</li>
					<li><span id="seconds" class="contador"></span>Seg</li>
				  </ul>
				</div>
			  </div>
  
			</div>
		  </div>
		</div>
	  </div>

  
  <section id="hashtag">
	<div class="container-fluid">
	  <div class="row text-xs-center p-t-1 p-b-4">
		<div class="col-md-12 text-center">
		  <br>
		  {{--<h3 class="titulohashtag">Durante nuestra boda utiliza el hashtag</h3>--}}
		  <input wire:model.defer="ArrayInvitacion.instagram_title" class="titulohashtag transparente text-dark" type="text" value="Durante nuestra boda utiliza el hashtag" style="width: 900px">
		  <br>
		  <div class="row text-center">
			<div class="col-4">
				<img class="imgizq2" src="https://eleve11.ar/wp-content/uploads/2022/08/hojas.png" alt="">
			</div>
			<div class="col-4 text-center">
				{{--<h5 class="hashtag">#BODAMARTIN&LAURA</h5>--}}
				<input wire:model.defer="ArrayInvitacion.instagram_hashtag" type="text" class="hashtag  " value="#BODAMARTIN&LAURA" style="width: 500px;">
			</div>
			<div class="col-4"></div>
		  </div>
		  <br>
		  <button class="botonhashtag">VER MURAL</button>
	  </div>
	</div>
	</section>

	<section id="galeria">
		<div class="container">
		  <div class="row text-xs-center p-t-1 p-b-4">
			<div class="col-md-12 text-center">
			  <div class="carousel-wrap">
				<div class="owl-carousel carousel-boho-galeria">
					@foreach ($fotos as $f)
				  		<div class="item"><img class="img" src="{{asset($f->image) }}" width="350px" height="500px"></div>
					@endforeach
			  </div>
		  </div>
		</div>
		</section>

		<section id="canciones">
			<div class="container-fluid">
			  <div class="row text-xs-center p-t-1 p-b-4">
				<div class="col-md-12 text-center">
				  <br>
				  {{--<h3 class="titulohashtag text-dark">¿Qué canciones no pueden faltar?</h3>--}}
				  <input wire:model.defer="ArrayInvitacion.music_title" class="titulohashtag transparente text-dark" type="text"  style="width: 750px">
				  <br>
				  {{--<span class="textocanciones">¡Ayúdanos sugiriendo las canciones que pensás que no pueden faltaren nuestra boda!</span>--}}
				  <input wire:model.defer="ArrayInvitacion.music_description" class="textocanciones transparente text-dark" type="text" value="¡Ayúdanos sugiriendo las canciones que pensás que no pueden faltaren nuestra boda!" style="width: 800px">
				  <br>
				  <div class="row">
					<div class="col-2"></div>
					<div class="col-8">
					  <form>
						<div class="row pt-5">
	  
						  <div class="col text-left">
		  
							<label class="labelform" for="inputEmail4">Nombre de la cancion*</label>
							<input type="email" class="form-control" id="inputEmail4" placeholder="">
		  
						  </div>
						  <div class="col text-left">
		  
							<label class="labelform" for="inputEmail4">Autor*</label>
							<input type="email" class="form-control" id="inputEmail4" placeholder="">
		  
						  </div>
						  <div class="col text-left">
		  
							<label class="labelform" for="inputEmail4">Link de Spotify, Youtube, etc</label>
							<input type="email" class="form-control" id="inputEmail4" placeholder="">
		  
						  </div>
						</div>
						<br>
						<button class="botonhashtag" type="submit">CONFIRMACION</button>
					  </form>
	  
					</div>
					<div class="col-2">
						<img src="" alt="">
						<img class="imgdech2 position-absolute" src="https://eleve11.ar/wp-content/uploads/2022/08/hojas-2.png" alt="">
					</div>
				  </div>
			  </div>
			</div>
		</section>
  
	<section id="vestimenta">
	  <div class="container">
		<div class="row text-xs-center p-t-1 p-b-4">
		  <div class="col-md-12 text-center">
			<br>
			{{--<h3 class="titulohashtag text-dark">Codigo de Vestimenta</h3>--}}
			<input wire:model.defer="ArrayInvitacion.dresscode_title" type="text" class="titulohashtag transparente text-dark" value="Codigo de Vestimenta" style="width: 500px; margin-bottom:10px;">
			<br>
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4">
					<select class="hashtag" wire:model.defer="ArrayInvitacion.dresscode_type" style="margin-bottom: 35px;">
						<option value="0">Semi-formal</option>
						<option value="1">Sport</option>
						<option value="2">Elegante</option>
						<option value="3">Traje</option>
						<option value="4">con chancla</option>
					</select>
				</div>
				<div class="col-4"></div>
			  </div>
			<br>
			<button class="botonhashtag">VER EJEMPLO</button>
		</div>
	  </div>
	  </section>


		<section id="regalos">
			<div class="container">
			  <div class="row text-xs-center p-t-1 p-b-3">
				<div class="col-md-12 text-center p-5">
				  <br>
				  {{--<h3 class="titulohashtag">Mesa de Regalo</h3>--}}
				  <input wire:model.defer="ArrayInvitacion.gift_title" type="text" class="titulohashtag transparente text-dark" value="Mesa de Regalo" style="width: 500px; margin-bottom:20px;">
				  <br>
				  {{--<span class="textoregalo text-dark">Tu presencia es nuestro mejor regalo, pero si quieres bendecirnos con algún bien material, aquí te dejamos una lista de regalos que nos gustaría recibir, o bien, también puedes colaborar con nuestra Luna de Miel.</span>--}}
				  <textarea wire:model.defer="ArrayInvitacion.gift_description" class="textoregalo transparente text-dark" name="w3review" rows="5" cols="120" style="border: none; overflow:hidden;">Tu presencia es nuestro mejor regalo, pero si quieres bendecirnos con algún bien material, aquí te dejamos una lista de regalos que nos gustaría recibir, o bien, también puedes colaborar con nuestra Luna de Miel.
				</textarea>
				  <br>
				  <div class="switcher mt-5 mb-5">
					<input type="radio" name="balance" value="yin" id="yin" class="switcher__input switcher__input--yin" checked="">
					<label for="yin" class="switcher__label">VER DATOS </label>
					
					<input type="radio" name="balance" value="yang" id="yang" class="switcher__input switcher__input--yang">
					<label for="yang" class="switcher__label">VER LISTAS</label>
					
					<span class="switcher__toggle"></span>
				  </div>
				  <br>
				  {{--<span class="datosbancarios">
					TITULAR: MATIAS NICOLAS SANCHEZ
					CBU: 1430001713011714940016
					ALIAS: TUERCA.TRUCO.MANIJA
					Nº DE CUENTA: 1301171494001
					CUIT: 23-36988681-9</span>--}}
					<textarea wire:model.defer="ArrayInvitacion.gift_bank" class="textohistoria transparente datosbancarios text-dark" name="w3review" rows="5" cols="100" style="border: none; overflow:hidden;">
					</textarea>
					<br>
					<div class="carousel-wrap regalos" style="display:none;">
					  <div class="owl-carousel carousel-boho-regalos">

						@foreach ($regalos as $re)

						<div class="item card p-4 tarjeta">
							<img class="card-img-top" src="{{asset($re -> image)}}" alt="Card image cap" height="350px" width="150px">
							<div class="card-body">
								<h5 class="card-title">LAMPARA COLGANTE</h5>
							  <span class="card-text">Lampara Campana Colgante 40cm Nórdica Escandinaba Madera</span>
							  <h5 class="cardprecio mt-3">$36452</h5>
							  <br>
							  <br>
							  <a href="#" class="botonregalo">REGALAR</a>
							</div>
						</div>

						@endforeach
						
					  </div>
					</div>
				</div>
			  </div>
			</div>
		  </section>
  
		{{--<section id="testigos">
		  <div class="container">
			<div class="row ">
			  <div class="col-3"></div>
			  <div class="col-6 text-center">
				<h1 class="titulotransporte">Testigos</h1>
				<div class="d-inline p-4 ">
				  <img class="redonda" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/ian-dooley-d1UPkiFd04A-unsplash.jpg" alt="profile">
		  
				</div>
				<div class="d-inline p-4 ">
				  <img class="redonda" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/ian-dooley-d1UPkiFd04A-unsplash.jpg" alt="profile">
			
				</div>
			  </div>
			  <div class="col-3"></div>
			</div>
		  </div>
		</section>--}}

		{{--<section id="vestimenta">
			<div class="container">
			  <div class="row ">
				<div class="col-12 text-center ">

					<h1 class="titulohashtag text-light">Recomendaciones</h1>

				</div>
			  </div>
			</div>
		  </section>--}}
  
		  <section id="testigos">
			<div class="container">
			  <div class="row ">
				<div class="col-12 text-center">
				  <h1 class="titulohashtag">Padrinos</h1>
				  <div class="inline">

				  <div class="d-inline p-4 ">
					<img class="redonda" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/ian-dooley-d1UPkiFd04A-unsplash.jpg" alt="profile">
					<br>
					<h5 class="padrinotxt">Roberto</h5>
				  </div>

				  <div class="d-inline p-4 ">
					<img class="redonda" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/ian-dooley-d1UPkiFd04A-unsplash.jpg" alt="profile">
					<br>
				  	<h5 class="padrinotxt">Roberto</h5>
				  </div>

				</div>
				</div>
			  </div>
			</div>
		  </section>
  
  
	  <div id="main-bg">
		<div class="container">
		  <div class="row">
			<div class="col-12 text-center pt-5">
			  {{--<h4 class="textodedicatoria">Vayan poniendose sus mejores trajes que estos novios se casan</h4>--}}
			  <input wire:model.defer="ArrayInvitacion.phrase" type="text" class="textodedicatoria transparente" value="Vayan poniendose sus mejores trajes que estos novios se casan" style="width: 750px">
			</div>
		  </div>
		</div>
	  </div>
  

  
		<section id="transporte">
		  <div class="container">
			<div class="row text-xs-center">
			  <div class="col-md-12 text-center">
				<br>
				{{--<h3 class="titulohashtag">Transporte Privado</h3>--}}
				<input wire:model.defer="ArrayInvitacion.transport_private_title" type="text" class="titulohashtag transparente text-dark"  width="600px">
				<br>
				{{--<span class="textotransporte">Para facilitarte el traslado al lugar del evento contamos con un transporte privado.Para este servicio es necesario que confirmes para reservar tu lugar.</span>--}}
				<textarea wire:model.defer="ArrayInvitacion.transport_private_description" class="textotransporte transparente text-dark " name="w3review" rows="3" cols="100" style="border: none; overflow:hidden;">Para facilitarte el traslado al lugar del evento contamos con un transporte privado.Para este servicio es necesario que confirmes para reservar tu lugar.
				</textarea>
				<br>
				<br>
				<form>
				  <div class="form-group text-left">
					<label class="labelform" for="inputEmail4">Nombre de la cancion*</label>
					<input type="email" class="form-control" id="inputEmail5" aria-describedby="emailHelp" placeholder="">
					
				  </div>
				  <div class="form-group text-left">
					<label class="labelform" for="inputEmail5">Nombre de la cancion*</label>
					<input type="password" class="form-control" id="inputEmail5" placeholder="">
				  </div>
				  <br>
				  <button class="botonhashtag" type="submit">CONFIRMACION</button>
  
				</form>
			</div>
		  </div>
		  </section>


		  <section id="confirmacion">
			<div class="container">
			  <div class="row text-xs-center">
				<div class="col-md-12 text-center">
				  <br>
				  {{--<h1 class="titulohashtag text-dark">Confirmacion</h1>--}}
				  <input wire:model.defer="ArrayInvitacion.confirm_title" type="text" class="titulohashtag transparente text-dark" value="Confirmacion" style="margin-bottom: 10px;">
				  <br>
				  {{--<p class="textoconfirmacion">Para poder participar de todo esto, es necesario que confirmes tu asistencia cuanto antes.
					La fecha límite es el 20 de Marzo del 2023.
					Completa el siguiente formulario para confirmar tu asistencia.</p>--}}
					<textarea wire:model.defer="ArrayInvitacion.confirm_description" class="textoconfirmacion transparente text-dark" name="w3review" rows="5" cols="100" style="border: none; overflow:hidden;">Para poder participar de todo esto, es necesario que confirmes tu asistencia cuanto antes.La fecha límite es el 20 de Marzo del 2023.Completa el siguiente formulario para confirmar tu asistencia.
					</textarea>
				  <br>
				  <br>
				  <form>
					<div class="form-group text-left">
					  <div class="form-check form-check-inline text-dark">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
						<label class="form-check-label" for="inlineRadio1">Si puedo</label>
					  </div>
					  <div class="form-check form-check-inline text-dark">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
						<label class="form-check-label" for="inlineRadio2">No puedo</label>
					  </div>
					  
					</div>
					<div class="form-group text-left">
					  <input type="email" class="form-control" id="inputEmail4" aria-describedby="emailHelp" placeholder="nombre completo">
					  
					</div>
					<div class="form-group text-left">
					  <input type="password" class="form-control" id="inputEmail4" placeholder="ingrese algun dato importante">
					</div>
					<br>
					<button class="botonhashtag" type="submit">CONFIRMACION</button>
	
				  </form>
				  
			  </div>
			</div>
			</section>
  
	  <section id="footer">
		<div class="container">
		  <div class="row text-xs-center p-t-1 p-b-4">
			<div class="col-md-12 text-center">
			  <br>
			  {{--<h5 class="textofooter">!Nos Casamos!</h5>--}}
			  <input  wire:model.defer="ArrayInvitacion.title" type="text" class="titulofooter transparente" value="!Nos Casamos!" style="width:300px;">
			  {{--<h3 class="titulofooter">Martin & Laura</h3>--}}
			  <br>
			  <input  wire:model.defer="ArrayInvitacion.subtitle" type="text" class="textofooter transparente" value="Martin & Laura" style="width:400px; margin-bottom:60px;">
			  <br>
		  </div>
		</div>
		</section>

	<div class="audio">
		<audio id="track">
			<source src="" />
		  </audio>
		  <div id="contenedor-play">
		  <div id="player-container">
			<div id="play-pause" class="play">Play</div>
		  </div>
		  </div>
	</div>

	<button id="botonactualizar" wire:click="actualizar" wire:target="actualizar" style="display:none;">actualizar</button>


</main>

@section('js')



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>

<script src="https://use.fontawesome.com/826a7e3dce.js"></script>

<script src="{{asset('/build/assets/boho.js')}}"></script>

@stop