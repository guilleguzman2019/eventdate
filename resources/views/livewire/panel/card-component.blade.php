<div>
    <x-slot name="titlePage">- Invitacion</x-slot>

    <div wire:ignore.self class="modal fade" id="editCat" tabindex="-1" aria-labelledby="editCatLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0">
                <div wire:loading wire:target="edit,update,imageEdit" class="position-absolute w-100 h-100 top-0 start-0 bg-light" style="--bs-bg-opacity: 0.9; z-index: 2;">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
                <div class="modal-header border-bottom-dashed p-4">
                    <h1 class="modal-title fs-5" id="editCatLabel">Crear invitacion</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">

                    <div class="mb-3">
						<div class="bg-secondary bg-opacity-10 px-4 py-2 rounded-4">
							<label class="fs-14 text-muted">Nombre<span class="text-danger fs-16">*</span></label><br>
							<input class="border-0 bg-transparent w-100" type="text" wire:model.defer="createArray.title" autofocus placeholder="Nombre de la invitacion" />
						</div>
						@error('createArray.title')
							<span class="fs-12 text-danger">{{ $message }}</span>
						@enderror
					</div>
                </div>

                <div class="modal-footer pt-0 border-0">
                    <button type="button" class="btn btn-secondary py-3 lh-1 px-4 rounded-4" data-bs-dismiss="modal">Cancelar</button>
                    <button class="btn btn-success py-3 lh-1 px-4 rounded-3" wire:click="save()" wire:loading.attr="disabled" wire:target="save, image">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
          <div class="icon-tab col-xs-12 col-sm-2 col-sm-offset-3 active">
              {{--<span class="glyphicon glyphicon-music"></span>--}}
              <img class="glyphicon" src="https://cdn-icons-png.flaticon.com/512/84/84239.png" alt="" height="50" width="50">
              <span class="icon-label">BODAS</span>
          </div>
          <div class="icon-tab col-xs-12 col-sm-2 ">
              {{--<span class="glyphicon glyphicon-camera"></span>--}}
              <img class="glyphicon" src="https://images.vexels.com/media/users/3/236440/isolated/lists/5cff4483ed2d0027d2512e2b29c227c3-quinceaneras-2.png" alt="" height="50" width="50">
              <span class="icon-label">QUINCES</span>
          </div>
    
          <div class="icon-tab col-xs-12 col-sm-2">
              {{--<span class="glyphicon glyphicon-facetime-video"></span>--}}
              <img class="glyphicon" src="https://cdn-icons-png.flaticon.com/128/918/918234.png" alt=""  height="50" width="50">
              <span class="icon-label">CUMPLEAÑOS</span>
          </div>
    
          <div class="icon-tab col-xs-12 col-sm-2">
            {{--<span class="glyphicon glyphicon-facetime-video"></span>--}}
            <img class="glyphicon" src="https://cdn-icons-png.flaticon.com/128/10/10958.png" alt=""  height="50" width="50">
            <span class="icon-label">EMPRESARIAL</span>
        </div>
    
        <div class="icon-tab col-xs-12 col-sm-2">
            {{--<span class="glyphicon glyphicon-facetime-video"></span>--}}
            <img class="glyphicon" src="https://cdn-icons-png.flaticon.com/128/1161/1161670.png" alt="" height="50" >
            <span class="icon-label">SOLTEROS</span>
        </div>
    
          <div class="icon-tab col-xs-12 col-sm-2">
            {{--<span class="glyphicon glyphicon-facetime-video"></span>--}}
            <img class="glyphicon" src="https://cdn-icons-png.flaticon.com/128/5525/5525779.png" alt="" height="50" >
            <span class="icon-label">FUNERAL</span>
        </div>
    
        </div> 
      </div>
      
      <!-- Your elements -->
      <div class="item col-sm-10 col-sm-offset-1 pt-4">
          <div class="panel panel-default">
            <div class="row p-3 m-3">
                <div class="col-12">
                @foreach ($templates as $tmp)
    
                @foreach($tmp-> categories as $tmpfinal)
                
                    @if($tmpfinal->name ==='boda ')
    
                            <div class="m-3 border text-center" style="display: inline-block; border-radius: 5px;">
                                <a href="{{ route('editar', $tmp -> id) }}">
                                    <img class="rounded" src="{{asset( $tmp -> image )}}" alt="" height="200px" width="220ox">
                                </a>
                                <br>
                                <br>
                                <p class="font-weight-bold">{{$tmp -> name}}</p>
                                <br>
                                {{--<button type="button" class="btn btn-dark">Elegir</button>--}}
                            </div>
                    @endif
                                   
                 @endforeach
    
                @endforeach
                    </div>
              </div>
          </div>    
      </div>
        
      <div class="item col-sm-10 col-sm-offset-1">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Element 2</h3></div>
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis tempor quam quis ultricies. In laoreet posuere odio, eget viverra nisl auctor eu. Aenean auctor turpis vel justo tincidunt molestie.</div>
          </div>    
      </div>
        
      <div class="item col-sm-10 col-sm-offset-1">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Element 3</h3></div>
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis tempor quam quis ultricies. In laoreet posuere odio, eget viverra nisl auctor eu. Aenean auctor turpis vel justo tincidunt molestie.</div>
          </div>    
      </div>


</div>





  
  