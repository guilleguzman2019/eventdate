@extends('layouts.template')

@section('css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="{{asset('/build/assets/romantic.css')}}">
@stop



<div>
    {{--<div class="container-fluid p-4" id="boton_cont" style="position:fixed; width: 100%; z-index: 99999999999;">
        <div class="row">
          <div class="col align-self-start">
            <a style="color:white;" href="{{ route('panel.cards')}}"><button class="botonhashtag" >VOLVER</button></a>
            <button id="boton" class="botonhashtag" wire:click="save" wire:target="save">CREAR INVITACION</button>
            <a style="color:white;"target="_blank" href="http://localhost:8000/invitacion/"><button class="botonhashtag" >VER</button></a>

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
	<div class="view hm-black-light" style="background-image: url({{ asset(($image) ? $image -> temporaryUrl() : 'https://eleve11.ar/wp-content/uploads/jet-engine-forms/17/2022/09/jonathan-borba-_YBeqTdXj3w-unsplash-1-scaled.jpg') }})">
		<div class="full-bg-img flex-center">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-1">
						<img class="imgizq" src="" alt="">
					</div>
					<div class="col-10 text-center p-0 m-0">
						
						<input class="tituloParejas transparente" wire:model.defer="titulo" type="text" value="" style="width:750px; width:100%">
						{{--<h1 class="tituloParejas">{{$card->title}}</h1>--}}
						
						<br>
						<input class="titulo transparente" type="text" value="!Nos Casamos!">
					</div>
					<div class="col-1">
						<img class="imgdech position-absolute" src="" alt="">
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
  <div class="view-divider"></div>

  <!--/.Main-->

  <section id="eventos">
	<div class="container p-4">
	  <div class="row  p-0 m-0">
		<div class="col-md-12 text-center">
		  <div class="carousel-wrap" wire:ignore>
			<div class="owl-carousel carousel-romantic" wire:ignore>

				@foreach ($events as $e)
						<div class="item card p-4 two" wire:ignore>
							<img class="card-img-top" src="{{asset($e -> image)}}" alt="Card image cap" height="350px" width="150px">
							<div class="card-body">
								<h5 class="card-lugar">CATEGRAL DE CORDOBA</h5>
								<span class="card-text">Independencia 80, Cordoba</span>
								<br>
								<br>
								<button href="#" class="botonhashtag">VER UBICACION</button>
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
  
  <!-- Outro -->
  <section id="historia">
  <div class="container">
	<div class="row text-xs-center p-t-1 p-b-4">
	  <div class="col-md-12 text-center">
		<br>
		{{--<h3 class="titulohashtag">Nuestra Historia</h3>--}}
		<input class="titulohashtag transparente text-dark" type="text" value="Nuestra Historia">
		<br>
		{{--<p class="textohistoria text-dark">Una propuesta, un S?? y una decisi??n que tomamos juntos. Nuestro amor ha crecido en nosotros, ha madurado y florecido, a veces sencillo, otras ca??tico pero siempre maravilloso. <br>
  
		  As?? comienza una nueva etapa en nuestras vidas. Somos aventureros, dedicados, fuertes de car??cter; los desaf??os que hemos enfrentado nos han ayudado a crecer y madurar; debemos agradecer a esos retos porque con ellos nos hemos dado cuenta que juntos podemos lograr lo que nos proponemos. <br>
		  
		  Tan s??lo podemos decir que nuestra vida en estos momentos se encuentra completa y estamos listos para compartir el resto de nuestros d??as juntos.</p>--}}

		  <textarea class="textohistoria text-dark" name="w3review" rows="8" cols="150" style="border: none; overflow:hidden;">Una propuesta, un S?? y una decisi??n que tomamos juntos. Nuestro amor ha crecido en nosotros, ha madurado y florecido, a veces sencillo, otras ca??tico pero siempre maravilloso.
			As?? comienza una nueva etapa en nuestras vidas. Somos aventureros, dedicados, fuertes de car??cter; los desaf??os que hemos enfrentado nos han ayudado a crecer y madurar; debemos agradecer a esos retos porque con ellos nos hemos dado cuenta que juntos podemos lograr lo que nos proponemos.
			Tan s??lo podemos decir que nuestra vida en estos momentos se encuentra completa y estamos listos para compartir el resto de nuestros d??as juntos.
		  </textarea>
	</div>
  </div>
  </section>

  <section id="galeria">
		<div class="container">
		  <div class="row text-xs-center p-t-1 p-b-4">
			<div class="col-md-12 text-center">
			  <div class="carousel-wrap">
				<div class="owl-carousel carousel-romantic-galeria">

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
		  {{--<h3 class="titulohashtag">Durante nuestra boda utiliza el hashtag</h3>--}}
		  <input class="titulohashtag transparente text-dark" type="text" value="Durante nuestra boda utiliza el hashtag" style="width: 800px; margin-bottom: 33px;">
		  <br>
		  <div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				{{--<h5 class="hashtag">#BODAMARTIN&LAURA</h5>--}}
				<input class="hashtag" type="text" value="#BODAMARTIN&LAURA" style="width:500px">
			</div>
			<div class="col-3"></div>
		  </div>
		  <br>
		  <button class="botonhashtag">VER MURAL</button>
	  </div>
	</div>
	</section>

	<div class="view-divider"></div>

	<section id="regalos">
			<div class="container">
			  <div class="row text-xs-center p-t-1 p-b-3">
				<div class="col-md-12 text-center p-5">
				  <br>
				  {{--<h3 class="tituloregalo">Mesa de Regalo</h3>--}}
				  <input class="tituloregalo transparente text-dark" type="text" value="Mesa de Regalo" style="margin-bottom: 60px;">
				  <br>
				  {{--<span class="textoregalo">Tu presencia es nuestro mejor regalo, pero si quieres bendecirnos con alg??n bien material, aqu?? te dejamos una lista de regalos que nos gustar??a recibir, o bien, tambi??n puedes colaborar con nuestra Luna de Miel.</span>--}}
				  <textarea class="textohistoria text-dark" name="w3review" rows="3" cols="100" style="border: none; overflow:hidden;">Tu presencia es nuestro mejor regalo, pero si quieres bendecirnos con alg??n bien material, aqu?? te dejamos una lista de regalos que nos gustar??a recibir, o bien, tambi??n puedes colaborar con nuestra Luna de Miel.
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
					N?? DE CUENTA: 1301171494001
					CUIT: 23-36988681-9</span>--}}
					<textarea class="textohistoria text-dark" name="w3review" rows="2" cols="100" style="border: none; overflow:hidden;">TITULAR: MATIAS NICOLAS SANCHEZ CBU: 1430001713011714940016 ALIAS: TUERCA.TRUCO.MANIJA N?? DE CUENTA: 1301171494001 CUIT: 23-36988681-9
					</textarea>
					<br>
					<div class="carousel-wrap regalos" style="display:none;">
					  <div class="owl-carousel carousel-romantic-regalos regalos">
		
						@foreach ($regalos as $re)

						<div class="item card p-4 tarjeta">
							<img class="card-img-top" src="{{asset($re -> image)}}" alt="Card image cap" height="350px" width="150px">
							<div class="card-body">
								<h5 class="card-title">LAMPARA COLGANTE</h5>
							  <span class="card-text">Lampara Campana Colgante 40cm N??rdica Escandinaba Madera</span>
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

	<section id="vestimenta">
	  <div class="container">
		<div class="row text-xs-center p-t-1 p-b-4">
		  <div class="col-md-12 text-center">
			<br>
			<h3 class="titulohashtag text-light">Vestimenta</h3>
			<br>
			<div class="row">
				<div class="col-3"></div>
				<div class="col-6"><h5 class="hashtag">CASUAL-CHIC</h5></div>
				<div class="col-3"></div>
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
			  <h3 class="titulohashtag">??Qu?? canciones no pueden faltar?</h3>
			  <br>
			  <span class="textocanciones">??Ay??danos sugiriendo las canciones que pens??s que no pueden faltaren nuestra boda!</span>
			  <br>
			  <div class="row">
				<div class="col-1"></div>
				<div class="col-10">
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
				<div class="col-1"></div>
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
				<h1 class="titulohashtag">Padrinos</h1>
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
				<h3 class="titulohashtag">Transporte Privado</h3>
				<br>
				<span class="textotransporte">Para facilitarte el traslado al lugar del evento contamos con un transporte privado.Para este servicio es necesario que confirmes para reservar tu lugar.</span>
				<br>
				<br>
				<form>
				  <div class="form-group text-left">
					<label class="labelform" for="inputEmail4">Nombre de la cancion*</label>
					<input type="email" class="form-control" id="inputEmail4" aria-describedby="emailHelp" placeholder="">
					
				  </div>
				  <div class="form-group text-left">
					<label class="labelform" for="inputEmail4">Nombre de la cancion*</label>
					<input type="password" class="form-control" id="inputEmail4" placeholder="">
				  </div>
				  <br>
				  <button class="botonhashtag" type="submit">CONFIRMACION</button>
  
				</form>
			</div>
		  </div>
		  </section>

		  <section id="confirmacion">
			<div class="container-fuild ">
			  <div class="row ">
				<div class="col-6 text-center ">
				  <h1 class="titulohashtag text-light">Confirmacion</h1>
				  <p class="textoconfirmacion">Para poder participar de todo esto, es necesario que confirmes tu asistencia cuanto antes.
					La fecha l??mite es el 20 de Marzo del 2023.
					Completa el siguiente formulario para confirmar tu asistencia.</p>
				</div>
				<div class="col-6 text-center mt-4 text-white ">
				  <form>
					<div class="form-group text-left">
					  <div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
						<label class="form-check-label" for="inlineRadio1">Si puedo</label>
					  </div>
					  <div class="form-check form-check-inline">
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

		{{--<div id="openModal" class="modalDialog">
			<div>
				<h2 class="titulomodal">AGREGAR EVENTOS</h2>
				<a href="#close" title="Close" class="close">&times;</a>
				<div class="row table">
					<div class="col-sm-5">
						<div class="p-4 border-dashed rounded-4 position-relative">
			
							<div class="">
								<div class="bg bg-opacity-10 px-4 py-2 rounded-4">
									<label class="fs-14 text-muted">Nombre del evento<span class="text-danger fs-16">*</span></label><br>
									<input class="border-0 bg-transparent w-100" type="text" wire:model.defer="event.title" autofocus="" placeholder="">
								</div>
			
												</div>
			
							<br>
							<div class="">
								<div class="bg bg-opacity-10 px-4 py-2 rounded-4">
									<label class="fs-14 text-muted">Nombre del lugar del evento<span class="text-danger fs-16">*</span></label><br>
									<input class="border-0 bg-transparent w-100" type="text" wire:model.defer="event.place_name" autofocus="" placeholder="">
								</div>
			
												</div>
			
							<br>
							<div class="">
								<div class="bg bg-opacity-10 px-4 py-2 rounded-4">
									<label class="fs-14 text-muted">Direccion<span class="text-danger fs-16">*</span></label><br>
									<input class="border-0 bg-transparent w-100" type="text" wire:model.defer="event.address" autofocus="" placeholder="">
								</div>
			
							</div>
							<br>
							<div class="">
								<div class="bg bg-opacity-10 px-4 py-2 rounded-4">
									<label class="fs-14 text-muted">Google maps<span class="text-danger fs-16">*</span></label><br>
									<input class="border-0 bg-transparent w-100" type="text" wire:model.defer="event.google_maps" autofocus="" placeholder="">
								</div>
			
												</div>
			
							<br>
							<div class="">
								<div class="bg bg-opacity-10 px-4 py-2 rounded-4">
									<label class="fs-14 text-muted">Fecha de evento<span class="text-danger fs-16">*</span></label><br>
									<input class="border-0 bg-transparent w-100" type="date" wire:model.defer="event.start_date" autofocus="" placeholder="">
								</div>
			
												</div>
			
							<br>
							<div class="row">
								<div class="col-sm-4">
									<div class="mb-3">
										<label class="fs-14 d-block mb-2">Imagen<span class="text-danger fs-16">*</span></label>
										<div class="ratio ratio-1x1 bg-img w-75 mx-auto rounded-4" style="background-image: url(https://icones.pro/wp-content/uploads/2021/02/icono-de-camara-gris.png);">
											<div>
												<a onclick="$('.imageUpload').click()" class="rounded-circle shadow bg-dark-4 p-2 d-block position-absolute top-0 start-100 translate-middle"><img src="http://localhost:8000/img/icos/ico-edit.svg" width="16" height="16" class="float-start f-invert"></a>
											</div>
										</div>
			
										<input class="imageUpload float-start" type="file" accept=".jpg,.png,.jpeg" wire:model="imageEvent" style="height: 1px; opacity: 0; overflow: hidden; width: 1px;">
			
																</div>
								</div>
							</div>
			
							<br>
							<button class="btn btn-success py-3 lh-1 px-4 rounded-3" wire:click="addEvent" wire:loading.attr="disabled" wire:target="">Guardar</button>
							<br>
						</div>
					</div>
					
					<div class="col-sm-7">
						@if ( $events -> count() )

						<table class="table table-borderless">
							<thead class="fs-14 text-muted opacity-50 text-uppercase border">
								<tr>
								<th class=""></th>
								<th class="">Nombre</th>
								<th class="">Direccion</th>
								<th></th>
							</tr></thead>
							<tbody class="fs-14 text-muted opacity-50 text-uppercase border">
								@foreach ($events as $e)
										<tr class="border-bottom-dashed align-middle">
										<td class="ps-0 py-3">
											<div class="d-flex align-items-center">
												<div class="ratio ratio-1x1 rounded-3 bg-img me-3" style="background-image: url(http://localhost:8000/); width: 40px;"></div>
												<img src="" alt="" height="100px;" width="100px;">
											</div>
										</td>

										<td>
											<span class="">{{$e -> place_name}}</span>
										</td>
										<td>
											<span class="">{{$e -> address}}</span>
										</td>
										<td class="text-end pe-0">
											<div class="dropdown">
												<button class="bg-light rounded-circle border-0 p-2" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="http://localhost:8000/img/icos/ico-dots.svg" width="16" height="16" class="d-block"></button>
												<ul class="dropdown-menu dropdown-menu-end">
												  <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editCat" wire:click="edit('3')">Editar</a></li>
												  <li><a class="dropdown-item" onclick="confirm('??Seguro que deseas eliminar este registro?') || event.stopImmediatePropagation()" wire:click="destroy('3')">Eliminar</a></li>
												</ul>
											</div>
										</td>

									</tr>
									@endforeach
													</tbody>
						</table>
						{{ $events -> links() }}

						@else

							<div class="py-5">
								<img src="{{ asset('img/panel/think.svg') }}" width="128" class="d-block mx-auto mb-3">
								<p class="text-center text-dark">No hay eventos aqu??.</p>
							</div>

            		@endif 
					</div>
				</div>
				
			</div>
		</div>

		<div id="openModalfoto" class="modalDialog">
			<div>
				<h2 class="titulomodal">AGREGAR EVENTOS</h2>
				<a href="#close" title="Close" class="close">&times;</a>
				<span>aca van las fotos</span>
			</div>
		</div>

		
    </div>--}}

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

<script src="{{asset('/build/assets/romantic.js')}}"></script>

@stop