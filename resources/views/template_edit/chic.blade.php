@extends('layouts.template')

@section('css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="{{asset('/build/assets/chic.css')}}">
@stop



<div>
    {{--<div class="container-fluid p-4" id="boton_cont" style="position:fixed; width: 100%; z-index: 99999999999;">
        <div class="row">
          <div class="col align-self-start">
            <a style="color:white;" href="{{ route('panel.cards')}}"><button class="botonhashtag" >VOLVER</button></a>
            <button id="boton" class="botonhashtag" wire:click="save" wire:target="save">CREAR INVITACION</button>
            {{--<a style="color:white;"target="_blank" href="http://localhost:8000/invitacion/"><button class="botonhashtag" >VER</button></a>

          </div>
          <div class="col align-self-center">
            
          </div>

          <div class="col align-self-end" style="text-align: end; display:none;" id="addEvent">
			<button class="botonhashtag" onclick="addguille()" >AGREGAR EVENTO</button>
          </div>

		  <div class="col align-self-end" style="text-align: end; display:none;" id="addGalery">
			<a style="color:white;"target="_blank" href="http://localhost:8000/invitacion/"><button class="botonhashtag" >AGREGAR FOTO</button></a>
			<a class="botonhashtag" href="#openModalfoto">AGREGAR FOTO</a>
          </div>

		  <div class="col align-self-end" style="text-align: end; display:none;" id="addBank">
			<a  style="color:white;"target="_blank" href="http://localhost:8000/invitacion/"><button class="botonhashtag" >AGREGAR REGALO</button></a>
			<a  style="color:white;"target="_blank" href="http://localhost:8000/invitacion/"><button class="botonhashtag" >AGREGAR DATOS BANK</button></a>
          </div>

		  <div class="col align-self-end" style="text-align: end; display:none;" id="addTestigo">
			<a  style="color:white;"target="_blank" href="http://localhost:8000/invitacion/"><button class="botonhashtag" >AGREGAR TESTIGOS</button></a>
          </div>


        </div>
    </div>--}}


<main>
	<div class="view hm-black-light" style="background-image: url({{ asset(($image) ? $image -> temporaryUrl() : 'https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/romantic-3.jpg') }})">
		<div class="full-bg-img flex-center">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-1">
						<img class="imgizq" src="https://eleve11.ar/wp-content/uploads/2022/09/flor1-izquierda.png" alt="">
					</div>
					<div class="col-10 text-center p-0 m-0">
						
						<input class="tituloParejas" wire:model.defer="titulo" type="text" value="MARCOS Y VICKY" style="width:750px; background-color:transparent; color:white; border: 0; text-align: center; width:100%">
						{{--<h1 class="tituloParejas">{{$card->title}}</h1>--}}
						<h3 class="titulo">!Nos Casamos!</h3>
					</div>
					<div class="col-1">
						<img class="imgdech position-absolute" src="https://eleve11.ar/wp-content/uploads/2022/09/flor1-derecha.png" alt="">
						{{--<div id="my-button">
							<label for="file-upload" class="botonhashtag">PORTADA</label>
							<input wire:model.defer="image" id="file-upload" type="file" style="display: none" onchange="uploadFile(this.files)" />
						</div>--}}

					</div>
				</div>
				
			</div>
		</div>
	</div>
  </main>

  <!--/.Main-->
  
  <!-- Outro -->
  <section id="historia">
  <div class="container">
	<div class="row text-xs-center p-t-1 p-b-4">
	  <div class="col-md-12 text-center">
		<br>
		<h3 class="tituloHistoria">Nuestra Historia</h3>
		<br>
		<p>Una propuesta, un Sí y una decisión que tomamos juntos. Nuestro amor ha crecido en nosotros, ha madurado y florecido, a veces sencillo, otras caótico pero siempre maravilloso.
  
		  Así comienza una nueva etapa en nuestras vidas. Somos aventureros, dedicados, fuertes de carácter; los desafíos que hemos enfrentado nos han ayudado a crecer y madurar; debemos agradecer a esos retos porque con ellos nos hemos dado cuenta que juntos podemos lograr lo que nos proponemos.
		  
		  Tan sólo podemos decir que nuestra vida en estos momentos se encuentra completa y estamos listos para compartir el resto de nuestros días juntos.</p>
	</div>
  </div>
  </section>

  <section id="galeria">
		<div class="container">
		  <div class="row text-xs-center p-t-1 p-b-4">
			<div class="col-md-12 text-center">
			  <div class="carousel-wrap">
				<div class="owl-carousel carousel-chic-galeria">

					@foreach ($fotos as $f)
						<div class="item"><img class="img" src="{{asset($f->image) }}" width="350px" height="500px"></div>
			  		@endforeach

				</div>
			  </div>
		  </div>
		</div>
	</section>

  
  <section id="hashtag">
	<div class="container">
	  <div class="row text-xs-center p-t-1 p-b-4">
		<div class="col-md-12 text-center">
		  <br>
		  <h3 class="titulohashtag">Durante nuestra boda utiliza el hashtag</h3>
		  <br>
		  <div class="row">
			<div class="col-3"></div>
			<div class="col-6"><h5 class="hashtag">#BODAMARTIN&LAURA</h5></div>
			<div class="col-3"></div>
		  </div>
		  <br>
		  <button class="botonhashtag">VER MURAL</button>
	  </div>
	</div>
	</section>

	<section id="eventos">
	<div class="container p-4">
	  <div class="row  p-0 m-0">
		<div class="col-md-12 text-center">
		  <div class="carousel-wrap" wire:ignore>
			<div class="owl-carousel carousel-chic" wire:ignore>

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

	<div id="main-bg-count">
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
  
	<section id="vestimenta">
	  <div class="container">
		<div class="row text-xs-center p-t-1 p-b-4">
		  <div class="col-md-12 text-center">
			<br>
			<h3 class="titulohashtag text-dark">Codigo de Vestimenta</h3>
			<p>Una ayuda para tu vestimenta</p>
			<br>
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4"><h5 class="hashtag">CASUAL-CHIC</h5></div>
				<div class="col-4"></div>
			</div>
			<br>
			<button class="botonhashtag">VER EJEMPLO</button>
		</div>
	  </div>
	  </section>


	  <section id="canciones">
		<div class="container">
		  <div class="row text-xs-center p-t-1 p-b-4">
			<div class="col-md-12 text-center">
			  <br>
			  <h3 class="titulohashtag">¿Qué canciones no pueden faltar?</h3>
			  <br>
			  <span class="textocanciones text-light">¡Ayúdanos sugiriendo las canciones que pensás que no pueden faltaren nuestra boda!</span>
			  <br>
			  <div class="row">
				<div class="col-1"></div>
				<div class="col-10">
				  <form>
					<div class="row pt-5 ">
  
					  <div class="col text-left">
	  
						<label class="labelform text-light" for="inputEmail4">Nombre de la cancion*</label>
						<input type="email" class="form-control" id="inputEmail4" placeholder="">
	  
					  </div>
					  <div class="col text-left">
	  
						<label class="labelform text-light" for="inputEmail4">Autor*</label>
						<input type="email" class="form-control" id="inputEmail4" placeholder="">
	  
					  </div>
					  <div class="col text-left">
	  
						<label class="labelform text-light" for="inputEmail4">Link de Spotify, Youtube, etc</label>
						<input type="email" class="form-control" id="inputEmail4" placeholder="">
	  
					  </div>
					</div>
					<br>
					<button class="botonhashtag" type="submit">CONFIRMACION</button>
				  </form>
  
				</div>
				<div class="col-1"></div>
			  </div>
		  </div>
		</div>
		</section>

		<section id="regalos">
			<div class="container">
			  <div class="row text-xs-center p-t-1 p-b-3">
				<div class="col-md-12 text-center p-5">
				  <br>
				  <h3 class="titulohashtag text-dark">Mesa de Regalo</h3>
				  <br>
				  <span class="textoregalo">Tu presencia es nuestro mejor regalo, pero si quieres bendecirnos con algún bien material, aquí te dejamos una lista de regalos que nos gustaría recibir, o bien, también puedes colaborar con nuestra Luna de Miel.</span>
				  <br>
				  <div class="switcher mt-5 mb-5">
					<input type="radio" name="balance" value="yin" id="yin" class="switcher__input switcher__input--yin" checked="">
					<label for="yin" class="switcher__label">VER DATOS </label>
					
					<input type="radio" name="balance" value="yang" id="yang" class="switcher__input switcher__input--yang">
					<label for="yang" class="switcher__label">VER LISTAS</label>
					
					<span class="switcher__toggle"></span>
				  </div>
				  <br>
				  <span class="datosbancarios">
					TITULAR: MATIAS NICOLAS SANCHEZ
					CBU: 1430001713011714940016
					ALIAS: TUERCA.TRUCO.MANIJA
					Nº DE CUENTA: 1301171494001
					CUIT: 23-36988681-9</span>
					<br>
					<div class="carousel-wrap regalos" style="display:none;">
					  <div class="owl-carousel carousel-chic-regalos ">
		
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


		{{--<section id="vestimenta">
			<div class="container">
			  <div class="row ">
				<div class="col-12 text-center ">

					<h1 class="titulotransporte text-light">Recomendaciones</h1>

				</div>
			  </div>
			</div>
		  </section>--}}
  
		<section id="testigos">
		  <div class="container">
			<div class="row ">
			  <div class="col-3"></div>
			  <div class="col-6 text-center">
				<h1 class="titulohashtag text-dark">Padrinos</h1>
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
		</section>
  
  
	  <div id="main-bg">
		<div class="container">
		  <div class="row">
			<div class="col-12 text-center pt-5">
			  <h4 class="textodedicatoria">Vayan poniendose sus mejores trajes que estos novios se casan</h4>
			</div>
		  </div>
		</div>
	  </div>
  

  
		<section id="transporte">
		  <div class="container">
			<div class="row text-xs-center fila">
			  <div class="col-md-12 text-center">
				<br>
				<h3 class="titulohashtag text-dark">Transporte Privado</h3>
				<br>
				<span class="textotransporte">Para facilitarte el traslado al lugar del evento contamos con un transporte privado.Para este servicio es necesario que confirmes para reservar tu lugar.</span>
				<br>
				<br>
				<form>
				  <div class="form-group text-left">
					<label class="labelform" for="inputEmail">Nombre de la cancion*</label>
					<input type="email" class="form-control" id="inputEmail5" aria-describedby="emailHelp" placeholder="">
					
				  </div>
				  <div class="form-group text-left">
					<label class="labelform" for="inputEmail">Nombre de la cancion*</label>
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
			  <div class="row ">
				<div class="col-6 text-center ">
					<form>
						<div class="form-group text-left">
						  <div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
							<label class="form-check-label text-light" for="inlineRadio1">Si puedo</label>
						  </div>
						  <div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
							<label class="form-check-label text-light" for="inlineRadio2">No puedo</label>
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

				<div class="col-6 text-center mt-4">

					<h1 class="tituloconfirmacion">Confirmacion</h1>
					<p class="textoconfirmacion">Para poder participar de todo esto, es necesario que confirmes tu asistencia cuanto antes.
					  La fecha límite es el 20 de Marzo del 2023.
					  Completa el siguiente formulario para confirmar tu asistencia.</p>
				</div>
			  </div>
			</div>
		  </section>
  
	  <section id="footer">
		<div class="container">
		  <div class="row text-xs-center p-t-1 p-b-4">
			<div class="col-md-12 text-center">
			  <br>
			  <h5 class="textofooter">!Nos Casamos!</h5>
			  <h3 class="titulofooter">Martin & Laura</h3>
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

@section('js')



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>

<script src="https://use.fontawesome.com/826a7e3dce.js"></script>

<script src="{{asset('/build/assets/chic.js')}}"></script>

@stop