<x-guest-layout>
    <div class="container py-5">
        <div class="row gx-sm-5">
          <div class="col-9 m-0 p-0">
            <iframe src="http://localhost:8000/invitacion/{{$slug -> slug}}" frameborder="0" width="700px" height="800px"></iframe>
          </div>
          <div class="col-3 m-0 p-0">
            <h5>Customiza tu invitacion a tu gusto.</h5>
            <livewire:panel.form-card-component :slug="$slug"/>
          </div>
        </div>
      </div>
 </x-guest-layout>