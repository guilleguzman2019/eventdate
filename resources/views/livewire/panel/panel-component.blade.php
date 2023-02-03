<div>
  <div class="gradient container-fluid bg-primary" style="position:fixed; z-index:99999;">
    <span></span>
  </div>

  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
      <a href="#" class="nav-link h3 text-white my-2">
      </a>
      <li href="#" class="nav-link">
        <button id="button_events" type="button" class="btn btn-light">Gestion de Eventos</button>
      </li>
    </ul>

    <span href="#" class="nav-link h4 w-100 mb-5">
      <a href=""><i class="bx bxl-instagram-alt text-white"></i></a>
      <a href=""><i class="bx bxl-twitter px-2 text-white"></i></a>
      <a href=""><i class="bx bxl-facebook text-white"></i></a>
    </span>
  </div>
  <br>
  <div class="p-5 position-absolute top-5 end-0" style=" margin-top:150px; overflow:scroll; height:900px; width:780px; ">
    <livewire:web.card-component :slug="'roberto-y-roberta'" />
  </div>
  

</div>
