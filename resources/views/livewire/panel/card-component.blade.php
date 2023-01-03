<div>
    <x-slot name="titlePage">- Invitacion</x-slot>

    <h1 class="fs-21 fw-700 mb-1">invitacion</h1>
    <h2 class="fs-14 text-muted mb-5">Creación, edición y eliminación de Invitaciones</h2>

    
        
    <div class="row ">
            @foreach ($templates as $tmp)
                <div class="col p-0 m-0">
                    <img src="{{asset( $tmp -> image )}}" alt="" height="400px" width="250px">
                    <br>
                    <span>{{$tmp -> name}}</span>
                </div>		
			@endforeach
    </div>

    <div class="row mt-5">
        <div class="col-2">
            <button type="button" class="btn btn-primary"><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editCat" wire:click="">Crear invitacion </a></button>
        </div>
    </div>
        


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

                    <div class="mb-3">
                        <label class="fs-14 fw-400 mb-1">template</label>
                        <select class="form-select  py-2 rounded-3 text-muted fs-14" wire:model.defer="createArray.template_id">
                            <option value="">Elige un template</option>
                            @foreach ($templates  as $tmp)
                                <option value="{{ $tmp -> id }}" class="">{{ $tmp -> name }}</option>
                            @endforeach
                        </select>
                        @error('createArray.template_id')
                            <span class="fs-12 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer pt-0 border-0">
                    <button type="button" class="btn btn-secondary py-3 lh-1 px-4 rounded-4" data-bs-dismiss="modal">Cancelar</button>
                    <button class="btn btn-success py-3 lh-1 px-4 rounded-3" wire:click="save" wire:loading.attr="disabled" wire:target="save, image">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>

