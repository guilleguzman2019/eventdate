 <x-guest-layout>

 <div class="wrapper d-flex align-items-stretch">
	<nav id="sidebar" class="order-last active" style="background-image: url(images/bg_1.jpg);">
	<div class="custom-menu">
	<button type="button" id="sidebarCollapse" class="btn btn-primary">
	</button>
	</div>
	<div class="">
	<h1><a href="index.html" class="logo"></a></h1>
  <div class="p-3">
    <livewire:panel.form-card-component :slug="$slug"/>
  </div>
	<div class="mb-5 px-4">
	</div>
	<div class="footer px-4">
	<p>
	</p>
	</div>
	</div>
	</nav>
	
	<div id="content" class="p-4 p-md-5 pt-5">
    <h1 class="display-4">Personaliza tu invitacion</h1>
    <iframe src="{{route('invitacion', $slug ->slug)}}" frameborder="0"  width="1500px" height="800px"></iframe>
	</div>
	</div>


</x-guest-layout>