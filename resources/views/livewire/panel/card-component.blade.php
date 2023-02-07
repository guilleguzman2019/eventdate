<div>
    <x-slot name="titlePage">- Invitacion</x-slot>

    

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
                                <a href="" data-bs-toggle="modal" data-bs-target="#{{$tmp -> name}}">
                                    <img class="rounded" src="{{asset( $tmp -> image )}}" alt="" height="200px" width="220ox">
                                </a>
                                <br>
                                <br>
                                <p class="font-weight-bold">{{$tmp -> name}}</p>
                                <br>
                                {{--<button type="button" class="btn btn-dark">Elegir</button>--}}
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="{{$tmp -> name}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elige el nombre de la invitacion con el template {{$tmp -> name}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input class="border-0 bg-transparent w-100" type="text" wire:model.defer="createArray.title" autofocus placeholder="nombre de la invitacion" />
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
                                    <button type="button" class="btn btn-primary" wire:click="save({{$tmp -> id}})" wire:loading.attr="disable" wire:target="save">Crear</button>
                                    </div>
                                </div>
                                </div>
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





  
  