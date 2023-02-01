<div>

    <section id="eventos">
        <div class="container p-4">
          <div class="row  p-0 m-0">
            <div class="col-md-12 text-center">
              <div class="carousel-wrap " wire:ignore>
                <div class="owl-carousel" wire:ignore>
    
                    @for ($i = 0; $i < $arrayPlaces; $i++)
    
                    <div class="item card p-4 two" >
                        <button class="btn-delete btn btn-danger" onclick="remove_image(this);">Eliminar</button>
                        <br>
                        <img class="card-img-top" src="http://2.bp.blogspot.com/--xxynRG0ycg/VjEUQUNVKpI/AAAAAAAAAC8/Aj_aRspCICc/s1600/catedral1.jpg" alt="Card image cap" height="450px" width="150px">
                        <div class="card-body text-center">
                          <input wire:model.defer="events.{{$i}}.title" class="card-title" type="text" placeholder="CEREMONIA">
                          <input wire:model.defer="events.{{$i}}.place_name" class="card-lugar" placeholder="Catedral de cordoba">
                          <input wire:model.defer="events.{{$i}}.start_date" class="card-text" type="date" placeholder="dia de la ceremonia">
                          <input wire:model.defer="events.{{$i}}.address" class="card-text" placeholder="Colon 677, Cordoba">
                          <br>
                          <br>
                          <a href="#" class="botonhashtag">VER UBICACION</a>
                        </div>
                    </div>
    
                    @endfor
    
                    {{--<div class="item card p-4 two" >
                        <button class="btn btn-danger" onclick="remove_image(this);">Eliminar</button>
                        <br>
                        <img class="card-img-top" src="https://i.pinimg.com/236x/ce/59/83/ce59837dd46efcaa5549a75bf2b1e443.jpg" alt="Card image cap" height="450px" width="150px">
                        <div class="card-body">
                            <input class="card-title" type="text" value="Iglesia diabolica">
                          <h5 class="card-lugar">CATEGRAL DE CORDOBA</h5>
                          <span class="card-text">Independencia 80, Cordoba</span>
                          <br>
                          <br>
                          <a href="#" class="botonhashtag">VER UBICACION</a>
                        </div>
                    </div>
    
                    <div class="item card p-4 two" >
                        <button class="btn btn-danger" onclick="remove_image(this);">Eliminar</button>
                        <br>
                        <img class="card-img-top" src="https://i.pinimg.com/236x/ce/59/83/ce59837dd46efcaa5549a75bf2b1e443.jpg" alt="Card image cap" height="450px" width="150px">
                        <div class="card-body">
                            <input class="card-title" type="text" value="Iglesia circo">
                          <h5 class="card-lugar">CATEGRAL DE CORDOBA</h5>
                          <span class="card-text">Independencia 80, Cordoba</span>
                          <br>
                          <br>
                          <a href="#" class="botonhashtag">VER UBICACION</a>
                        </div>
                    </div>--}}
    
                    
    
                </div>
              </div>
              <br>
              <div class="col align-self-end" style="text-align: end;" id="addEvent">
                <button class="botonhashtag" onclick="addguille()" wire:click="add" wire:target="add">AGREGAR EVENTO</button>
              </div>
          </div>
        </div>
        </section>
    
</div>
