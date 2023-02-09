<div>

<style>
    body{
      overflow:hidden ;
    }
</style>

<div style="overflow: hidden">

  <nav class="gradient container-fluid bg-primary" style="position:fixed; z-index:99999;">
    <br>
    <div class="col align-self-end" style="text-align: end;" id="addEvent">
			<button class="btn btn-light  btn-builder" onclick="addguille()" wire:click="add" wire:target="add">Compartir</button>
    </div>
  </nav>
  <div class="container-fluid">

  <div class="row">
  <div class="col-sm-3 col-md-2 sidebar">
    <div class="pt-5 p-2">
      <br>
      <button type="button" class="btn btn-light btn-builder" data-bs-toggle="modal" data-bs-target="#exampleModal">Gestion de Eventos</button>
    </div>

    <div class=" p-2">
      <br>
      <button type="button" class="btn btn-light  btn-builder" data-bs-toggle="modal" data-bs-target="#exampleGaleria">Gestion de Galeria</button>
    </div>

    <div class=" p-2">
      <br>
      <button type="button" class="btn btn-light  btn-builder" data-bs-toggle="modal" data-bs-target="#exampleRegalos">Gestion de Regalos</button>
    </div>

    <div class=" p-2">
      <br>
      <button type="button" class="btn btn-light  btn-builder" data-bs-toggle="modal" data-bs-target="#exampleRegalos">Gestion de Padrinos</button>
    </div>

    <div class="p-3">
      <label style="font-family: 'Montserrat', Sans-serif;" class="text-light" for="meeting-time">Dia y hora del evento:</label>

      <input wire:model.defer="time" style="width:180px" type="date-local" id="weddy-time"
            placeholder="mm-dd-yyyy"
            name="weddy-time" value="09/02/2023">
      <br>
      <br>
      <button onclick="weddytime()" type="button" class="btn btn-light  btn-builder" wire:click="changeTime" wire:target="changeTime">Cambiar Horario</button>
    </div>



  </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2  main" style=" margin-top:150px; padding-left:55px; padding-right:55px; margin-bottom:500px;">

      <livewire:web.card-component :slug="$invitacion -> slug"  height:900px/>
    </div>
  </div>
  </div>


  <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-4 bg-light">
                <fieldset>
                  <label for="" class="text-dark" style="font-family:'Noto Serif Display'">Sube una imagen</label>
                  <br>
                  <div  id="click" style="background-image: url({{ asset(($imageEvent) ? $imageEvent -> temporaryUrl() : '') }})">
                    <br>
                    <img src="https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-vector-plus-icon-png-image_515260.jpg" alt="" width="20px" height="20px">
                  </div>
                  <input wire:model.defer="imageEvent" type="file" id="input_file" style="display:none;"/>
                  <input wire:model.defer="arrayEvent.title" type="text" id="titulo" placeholder="Titulo"/>
                  <input wire:model.defer="arrayEvent.start_date" type="text" id="fecha" placeholder="fecha y hora"/>
                  <input wire:model.defer="arrayEvent.place_name" type="text" id="nombre" placeholder="Nombre del lugar"/>
                  <input wire:model.defer="arrayEvent.address" type="text" id="direccion" placeholder="Direccion" />
                  <input wire:model.defer="arrayEvent.google_maps" type="text" id="gooogle_maps" placeholder="Link de Google Maps" />
                  <br>
                  <br>
                  <button onclick="addedit('{{ asset(($imageEvent) ? $imageEvent -> temporaryUrl() : '') }}')" wire:click="addEvent" wire:target="addEvent" class="next action-button text-light btn-lg">Agregar</button>
                </fieldset>
              </div>
              <div class="col-8">
                <span class="text-dark" style="font-family:'Noto Serif Display'; font-size:11px;">Agregar informacion importante acerca de tus eventos como fecha, hora, ubicacion.</span>
                <br>
                <br>
                <br>
                <div class="client-container">
                  <div class="owl-carousel carousel-builder" wire:ignore>

                    @foreach ($events as $e)
                      <div class="item" wire:ignore>
                        <div>
                          
                        </div>
                        <div class="text-center" style="border: 1px solid grey; padding: 5px;">
                          <img src="{{asset($e -> image )}}" alt="" height="100px" width="100px">
                          <br>
                          <h5 class="text-dark">{{$e ->title}}</h5>
                          <span style="background-color: gray; padding: 8px; border-radius:5px;">08/04/2023 19:00 hs</span>
                          <br>
                          <br>
                          <span class="text-dark" style="font-size: 13px;">carretera C-37, km 163,08567 Sant Andreu de la Vola, Barcelona, España</span>
                          <br>
                        </div>
                      </div>
                    @endforeach

                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>



  <div wire:ignore.self class="modal fade" id="exampleGaleria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-4 bg-light">
                <fieldset>
                  <label for="" class="text-dark" style="font-family:'Noto Serif Display'">Sube una imagen</label>
                  <br>
                  <div  id="click2" style="background-image: url({{ asset(($imagen) ? $imagen -> temporaryUrl() : '') }})">
                    <br>
                    <img src="https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-vector-plus-icon-png-image_515260.jpg" alt="" width="20px" height="20px">
                  </div>
                  <input wire:model.defer="imagen" type="file" id="input_file2" style="display:none;"/>
                  <br>
                  <br>
                  <button onclick="addphoto('{{ asset(($imagen) ? $imagen -> temporaryUrl() : '') }}')" wire:click="addPhoto" wire:target="addPhoto" class="next action-button text-light btn-lg">Agregar</button>
                </fieldset>
              </div>
              <div class="col-8">
                <span class="text-dark" style="font-family:'Noto Serif Display'; font-size:11px;">Agregar fotos a tu galeria de imagenes .</span>
                <br>
                <br>
                <br>
                <div class="client-container">
                  <div class="owl-carousel carousel-builder-galery" wire:ignore>

                    @foreach ($fotos as $f)
                      <div class="item" wire:ignore>
                        <div>
                          
                        </div>
                        <div class="text-center" style="padding: 1px;">
                          <img src="{{asset($f -> image )}}" alt="" height="150px" width="100px">
                        </div>
                      </div>
                    @endforeach

                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>



  <div wire:ignore.self class="modal fade" id="exampleRegalos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-4 bg-light">
                <fieldset>
                  <label for="" class="text-dark" style="font-family:'Noto Serif Display'">Sube una imagen</label>
                  <br>
                  <div  id="click3" style="background-image: url({{ asset(($imagenRegalo) ? $imagenRegalo -> temporaryUrl() : '') }})">
                    <br>
                    <img src="https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-vector-plus-icon-png-image_515260.jpg" alt="" width="20px" height="20px">
                  </div>
                  <input wire:model.defer="imagenRegalo" type="file" id="input_file3" style="display:none;"/>
                  <input wire:model.defer="arrayRegalo.title" type="text" id="tituloregalo" placeholder="Titulo"/>
                  <input wire:model.defer="arrayRegalo.description" type="text" id="descripcion" placeholder="descripcion"/>
                  <input wire:model.defer="arrayRegalo.precio" type="text" id="precio" placeholder="precio"/>
                  <input wire:model.defer="arrayRegalo.link" type="text" id="link" placeholder="link" />
                  <br>
                  <br>
                  <button onclick="addgift('{{ asset(($imagenRegalo) ? $imagenRegalo -> temporaryUrl() : '') }}')" wire:click="addGift" wire:target="addGift" class="next action-button text-light btn-lg">Agregar</button>
                </fieldset>
              </div>
              <div class="col-8">
                <span class="text-dark" style="font-family:'Noto Serif Display'; font-size:11px;">Agregar los regalos que desees que esten presentes en tu boda.</span>
                <br>
                <br>
                <br>
                <div class="client-container">
                  <div class="owl-carousel carousel-builder-regalo" wire:ignore>

                    @foreach ($regalos as $re)
                      <div class="item" wire:ignore>
                        <div>
                          
                        </div>
                        <div class="text-center" style="padding: 1px;">
                          <img src="{{asset($re -> image )}}" alt="" height="150px" width="100px">
                          <span  class="text-dark">${{$re -> precio}}</span>
                          <br>
                          <span class="text-dark">{{$re -> descripcion}}</span>
                        </div>
                      </div>
                    @endforeach

                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  
  var time = document.getElementById('weddy-time');

console.log(time.value)

</script>
</div>