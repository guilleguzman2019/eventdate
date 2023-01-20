@extends('layouts.template')

@section('css')

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@1,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('/build/assets/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
@stop



<div>
    <div class="container-fluid p-4" id="boton_cont" style="position:fixed; width: 100%; z-index: 99999999999;">
        <div class="row">
          <div class="col align-self-start">
            <a style="color:white;" href="{{ route('panel.dashboard')}}"><button class="botonhashtag" >VOLVER</button></a>
            <button id="boton" class="botonhashtag" wire:click="save" wire:target="save">ACTUALIZAR</button>
            <a style="color:white;"target="_blank" href="http://localhost:8000/invitacion/{{$card->slug}}"><button class="botonhashtag" >VER</button></a>

          </div>
          <div class="col align-self-center">
            
          </div>

          <div class="col align-self-end" style="text-align: end; display:none;" id="addEvent">
			<a data-toggle="modal" data-target="#myModal" style="color:white;"target="_blank" href="http://localhost:8000/invitacion/{{$card->slug}}"><button class="botonhashtag" >AGREGAR EVENTO</button></a>
          </div>

		  <div class="col align-self-end" style="text-align: end; display:none;" id="addGalery">
			<a style="color:white;"target="_blank" href="http://localhost:8000/invitacion/{{$card->slug}}"><button class="botonhashtag" >AGREGAR FOTO</button></a>
          </div>

		  <div class="col align-self-end" style="text-align: end; display:none;" id="addBank">
			<a  style="color:white;"target="_blank" href="http://localhost:8000/invitacion/{{$card->slug}}"><button class="botonhashtag" >AGREGAR REGALO</button></a>
			<a  style="color:white;"target="_blank" href="http://localhost:8000/invitacion/{{$card->slug}}"><button class="botonhashtag" >AGREGAR DATOS BANK</button></a>
          </div>

		  <div class="col align-self-end" style="text-align: end; display:none;" id="addTestigo">
			<a  style="color:white;"target="_blank" href="http://localhost:8000/invitacion/{{$card->slug}}"><button class="botonhashtag" >AGREGAR TESTIGOS</button></a>
          </div>


        </div>
    </div>


<main>
	<div class="view hm-black-light">
		<div class="full-bg-img flex-center">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-1">
						<img class="imgizq" src="https://eleve11.ar/wp-content/uploads/2022/09/lineas-1-izquierda-285x1024.png" alt="">
					</div>
					<div class="col-10 text-center p-0 m-0">
						
						<input class="tituloParejas" wire:model.defer="titulo" type="text" value="{{$card->title}}" style="width:750px; background-color:transparent; color:white; border: 0; text-align: center; width:100%">
						{{--<h1 class="tituloParejas">{{$card->title}}</h1>--}}
						<h3 class="titulo">!Nos Casamos!</h3>
					</div>
					<div class="col-1">
						<img class="imgdech position-absolute" src="https://eleve11.ar/wp-content/uploads/2022/09/lineas-1-derecha.png" alt="">
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
  
  <section id="hashtag">
	<div class="container">
	  <div class="row text-xs-center p-t-1 p-b-4">
		<div class="col-md-12 text-center">
		  <br>
		  <h3 class="titulohashtag">Durante nuestra boda utiliza el hashtag</h3>
		  <br>
		  <h5 class="hashtag">#BODAMARTIN&LAURA</h5>
		  <br>
		  <button class="botonhashtag">VER MURAL</button>
	  </div>
	</div>
	</section>
  
	<section id="vestimenta">
	  <div class="container">
		<div class="row text-xs-center p-t-1 p-b-4">
		  <div class="col-md-12 text-center">
			<br>
			<h3 class="titulovestimenta">Codigo de Vestimenta</h3>
			<br>
			<h5 class="hashtag">CASUAL-CHIC</h5>
			<br>
			<button class="botonhashtag">VER EJEMPLO</button>
		</div>
	  </div>
	  </section>
  
		<section id="testigos">
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
		</section>
  
  
		<section id="confirmacion">
		  <div class="container-fuild ">
			<div class="row ">
			  <div class="col-6 text-center ">
				<h1 class="titulovestimenta">Confirmacion</h1>
				<p class="textoconfirmacion">Para poder participar de todo esto, es necesario que confirmes tu asistencia cuanto antes.
				  La fecha límite es el 20 de Marzo del 2023.
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
  
		<section id="testigos">
		  <div class="container">
			<div class="row ">
			  <div class="col-3"></div>
			  <div class="col-6 text-center">
				<h1 class="titulotransporte">Padrinos</h1>
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
  
	  <section id="regalos">
		<div class="container">
		  <div class="row text-xs-center p-t-1 p-b-3">
			<div class="col-md-12 text-center p-5">
			  <br>
			  <h3 class="tituloregalo">Mesa de Regalo</h3>
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
				<div class="carousel-wrap" style="display:none;">
				  <div class="owl-carousel ">
	
					<div class="card p-4">
					  <img class="card-img-top" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/D_NQ_NP_885930-MLA47397157459_092021-O.webp" alt="Card image cap">
					  <div class="card-body">
						<h5 class="card-title">LAMPARA COLGANTE</h5>
						<span class="card-text">Lampara Campana Colgante 40cm Nórdica Escandinaba Madera</span>
						<h5 class="cardprecio mt-3">$36452</h5>
						<br>
						<br>
						<a href="#" class="botonregalo">REGALAR</a>
					  </div>
					</div>
					
					<div class="card p-4" >
					  <img class="card-img-top" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/D_NQ_NP_885930-MLA47397157459_092021-O.webp" alt="Card image cap">
					  <div class="card-body">
						<h5 class="card-title">LAMPARA COLGANTE</h5>
						<span class="card-text">Lampara Campana Colgante 40cm Nórdica Escandinaba Madera</span>
						<h5 class="cardprecio mt-3">$36452</h5>
						<br>
						<br>
						<a href="#" class="botonregalo">REGALAR</a>
					  </div>
					</div>
					
					<div class="card p-4" >
					  <img class="card-img-top" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/D_NQ_NP_885930-MLA47397157459_092021-O.webp" alt="Card image cap">
					  <div class="card-body">
						<h5 class="card-title">LAMPARA COLGANTE</h5>
						<span class="card-text">Lampara Campana Colgante 40cm Nórdica Escandinaba Madera</span>
						<br>
						<h5 class="cardprecio mt-3">$36452</h5>
						<br>
						<br>
						<a href="#" class="botonregalo">REGALAR</a>
					  </div>
					</div>
	  
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
			  <h4 class="textodedicatoria">Vayan poniendose sus mejores trajes que estos novios se casan</h4>
			</div>
		  </div>
		</div>
	  </div>
  
	  <section id="eventos">
		<div class="container">
		  <div class="row text-xs-center p-t-1 p-b-4">
			<div class="col-md-12 text-center">
			  <div class="carousel-wrap">
				<div class="owl-carousel ">
  
				  <div class="card p-4">
					<img class="card-img-top" src="https://eleve11.ar/wp-content/uploads/2022/09/Catedral-4.jpg" alt="Card image cap">
					<div class="card-body">
					  <h5 class="card-title">CEREMONIA</h5>
					  <h5 class="card-lugar">CATEGRAL DE CORDOBA</h5>
					  <span class="card-text">Independencia 80, Cordoba</span>
					  <br>
					  <br>
					  <a href="#" class="botonhashtag">VER UBICACION</a>
					</div>
				  </div>
				  
				  <div class="card p-4" >
					<img class="card-img-top" src="https://eleve11.ar/wp-content/uploads/2022/09/Catedral-4.jpg" alt="Card image cap">
					<div class="card-body">
					  <h5 class="card-title">CEREMONIA</h5>
					  <h5 class="card-lugar">CATEGRAL DE CORDOBA</h5>
					  <span class="card-text">Independencia 80, Cordoba</span>
					  <br>
					  <br>
					  <a href="#" class="botonhashtag">VER UBICACION</a>
					</div>
				  </div>
				  
				  <div class="card p-4" >
					<img class="card-img-top" src="https://eleve11.ar/wp-content/uploads/2022/09/Catedral-4.jpg" alt="Card image cap">
					<div class="card-body">
					  <h5 class="card-title">CEREMONIA</h5>
					  <h5 class="card-lugar">CATEGRAL DE CORDOBA</h5>
					  <span class="card-text">Independencia 80, Cordoba</span>
					  <br>
					  <br>
					  <a href="#" class="botonhashtag">VER UBICACION</a>
					</div>
				  </div>
	
				</div>
			  </div>
		  </div>
		</div>
		</section>
  
	  <section id="eventos">
		<div class="container">
		  <div class="row text-xs-center p-t-1 p-b-4">
			<div class="col-md-12 text-center">
			  <div class="carousel-wrap">
				<div class="owl-carousel">
				  <div class="item"><img class="img" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/Sin-titulo-1_Mesa-de-trabajo-1-576x1024.jpg"></div>
				  <div class="item"><img class="img" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/Sin-titulo-1_Mesa-de-trabajo-1-576x1024.jpg"></div>
				  <div class="item"><img class="img" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/Sin-titulo-1_Mesa-de-trabajo-1-576x1024.jpg"></div>
				  <div class="item"><img class="img" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/Sin-titulo-1_Mesa-de-trabajo-1-576x1024.jpg"></div>
				  <div class="item"><img class="img" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/Sin-titulo-1_Mesa-de-trabajo-1-576x1024.jpg"></div>
				  <div class="item"><img class="img" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/Sin-titulo-1_Mesa-de-trabajo-1-576x1024.jpg"></div>
				  <div class="item"><img class="img" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/Sin-titulo-1_Mesa-de-trabajo-1-576x1024.jpg"></div>
				  <div class="item"><img class="img" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/Sin-titulo-1_Mesa-de-trabajo-1-576x1024.jpg"></div>
				  <div class="item"><img class="img" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/Sin-titulo-1_Mesa-de-trabajo-1-576x1024.jpg"></div>
				  <div class="item"><img class="img" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/Sin-titulo-1_Mesa-de-trabajo-1-576x1024.jpg"></div>
				  <div class="item"><img class="img" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/Sin-titulo-1_Mesa-de-trabajo-1-576x1024.jpg"></div>
				  <div class="item"><img class="img" src="https://eleve11.ar/wp-content/uploads/jet-engine-forms/1/2022/09/Sin-titulo-1_Mesa-de-trabajo-1-576x1024.jpg"></div>
				</div>
			  </div>
		  </div>
		</div>
		</section>
  
  
  
		
	  <section id="canciones">
		<div class="container">
		  <div class="row text-xs-center p-t-1 p-b-4">
			<div class="col-md-12 text-center">
			  <br>
			  <h3 class="titulocanciones">¿Qué canciones no pueden faltar?</h3>
			  <br>
			  <span class="textocanciones">¡Ayúdanos sugiriendo las canciones que pensás que no pueden faltaren nuestra boda!</span>
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
  
		<section id="transporte">
		  <div class="container">
			<div class="row text-xs-center fila">
			  <div class="col-md-12 text-center">
				<br>
				<h3 class="titulotransporte">Transporte Privado</h3>
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


@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.min.js"></script>
<script src="{{asset('/build/assets/script.js')}}"></script>

@stop