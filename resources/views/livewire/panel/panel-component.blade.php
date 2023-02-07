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
			<button class="btn btn-light btn-lg btn-builder" onclick="addguille()" wire:click="add" wire:target="add">Compartir</button>
    </div>
  </nav>
  <div class="container-fluid">

  <div class="row">
  <div class="col-sm-3 col-md-2 sidebar">
    <div class="pt-5 p-3">
      <br>
      <button type="button" class="btn btn-light btn-lg btn-builder" data-bs-toggle="modal" data-bs-target="#exampleModal">Gestion de Eventos</button>
    </div>

    <div class="p-3">
    
    </div>



  </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2  main" style=" margin-top:150px; padding-left:55px; padding-right:55px;">
      <div style="width: 100px; position:fixed; margin-top:100px;">
        <span></span>
      </div>
      <livewire:web.card-component :slug="$invitacion -> slug"/>
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
              <div class="col-4">
                <fieldset>
                  <label for="" class="text-dark" style="font-family:'Noto Serif Display'">Sube una imagen</label>
                  <br>
                  <div style="border: 1px solid grey; width: 190px; height:100px" id="click">
                    <br>
                    <img src="https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-vector-plus-icon-png-image_515260.jpg" alt="" width="20px" height="20px">
                  </div>
                  <input wire:model.defer="imageEvent" type="file" id="input_file" style="display:none;">
                  <input wire:model.defer="arrayEvent.title" type="text" name="titulo" placeholder="Titulo" />
                  <input wire:model.defer="arrayEvent.start_date" type="text" name="fecha" placeholder="fecha y hora" />
                  <input wire:model.defer="arrayEvent.place_name" type="text" name="nombre" placeholder="Nombre del lugar" />
                  <input wire:model.defer="arrayEvent.address" type="text" name="direccion" placeholder="Direccion" />
                  <input wire:model.defer="arrayEvent.google_maps" type="text" name="gooogle_maps" placeholder="Link de Google Maps" />
                  <br>
                  <br>
                  <button wire:click="addEvent" wire:target="addEvent" class="next action-button text-light btn-lg">Agregar</button>
                </fieldset>
              </div>
              <div class="col-8">
                <span class="text-dark" style="font-family:'Noto Serif Display'; font-size:11px;">Agregar informacion importante acerca de tus eventos como fecha, hora, ubicacion.</span>
                <br>
                <br>
                <br>
                <div class="client-container">
                  <div id="owl-carousel" class="owl-carousel owl-theme" wire:ignore>

                    <div class="item" wire:ignore>
                      <div>
                        
                      </div>
                      <div class="text-center" style="border: 1px solid grey; padding: 5px;">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1d/8c/62/ae/iglesia-nuestra-senora.jpg?w=1200&h=-1&s=1" alt="" height="100px" width="100px">
                        <br>
                        <h5 class="text-dark">Ceremia</h5>
                        <span style="background-color: gray; padding: 8px; border-radius:5px;">08/04/2023 19:00 hs</span>
                        <br>
                        <br>
                        <span class="text-dark" style="font-size: 13px;">carretera C-37, km 163,08567 Sant Andreu de la Vola, Barcelona, España</span>
                        <br>
                      </div>
                    </div>

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




</div>