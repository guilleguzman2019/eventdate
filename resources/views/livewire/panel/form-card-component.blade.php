<div>
    <form>
        <br>
        <div class="form-group">
          <label for="exampleInputEmail1">Titulo</label>
          <input  wire:model="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el titulo de la invitacion">
        </div>
        <br>
        <div class="form-group ">
            <label for="exampleFormControlTextarea1">Descripcion de la Historia</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nos conocimos en un bar de copas..."></textarea>
        </div>
        <br>
        <button class="btn btn-success py-3 lh-1 px-4 rounded-3" wire:click="save" wire:loading.attr="disabled" wire:target="save">Guardar</button>
    </form>
</div>
