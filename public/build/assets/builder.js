$('.carousel-builder').owlCarousel({
    loop: false,
    margin: 30,
    dots: true,
    nav: true,
    autoplay:false,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    items : 2,
    navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
    responsive: {
    0: {
      items: 2
    },

    600: {
      items: 2
    },

    1024: {
      items: 2
    },

    1366: {
      items: 2
    }
  }
})



$('.carousel-builder-galery').owlCarousel({
  loop: false,
  margin: 30,
  dots: true,
  nav: true,
  autoplay:false,
  autoplayTimeout:5000,
  autoplayHoverPause:false,
  items : 2,
  navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
  responsive: {
  0: {
    items: 2
  },

  600: {
    items: 2
  },

  1024: {
    items: 2
  },

  1366: {
    items: 2
  }
}
})


$('.carousel-builder-regalo').owlCarousel({
  loop: false,
  margin: 30,
  dots: true,
  nav: true,
  autoplay:false,
  autoplayTimeout:5000,
  autoplayHoverPause:false,
  items : 2,
  navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
  responsive: {
  0: {
    items: 2
  },

  600: {
    items: 2
  },

  1024: {
    items: 2
  },

  1366: {
    items: 2
  }
}
})


var div = document.getElementById('click');

div.addEventListener('click', function(){

    document.getElementById('input_file').click();
});

var div = document.getElementById('click2');

div.addEventListener('click', function(){

    document.getElementById('input_file2').click();
});

var div = document.getElementById('click3');

div.addEventListener('click', function(){

    document.getElementById('input_file3').click();
});


function addedit(image){


  const val1 = document.getElementById('input_file').value;

  const titulo = document.getElementById('titulo').value;

  const fecha = document.getElementById('fecha').value;

  const nombre = document.getElementById('nombre').value;

  const direccion = document.getElementById('direccion').value;

  const maps = document.getElementById('gooogle_maps').value;

  console.log(val1);


  $('.carousel-builder').trigger('add.owl.carousel', [`<div>
                          
  </div>
  <div class="text-center" style="border: 1px solid grey; padding: 5px;">
    <img src="`+image+`" alt="" height="100px" width="100px">
    <br>
    <h5 class="text-dark">`+titulo+`</h5>
    <span style="background-color: gray; padding: 8px; border-radius:5px;">08/04/2023 19:00 hs</span>
    <br>
    <br>
    <span class="text-dark" style="font-size: 13px;">carretera C-37, km 163,08567 Sant Andreu de la Vola, Barcelona, España</span>
    <br>
  </div>
</div>`])
        .trigger('refresh.owl.carousel');

  
  $('.carousel-boho').trigger('add.owl.carousel', [`<div class="item card p-4 two" >
  <img class="card-img-top" src="`+image+`" alt="Card image cap" height="350px" width="150px">
  <div class="card-body">
    <h5 class="card-lugar">`+titulo+`</h5>
    <span class="card-text">Independencia 80, Cordoba</span>
    <br>
    <br>
    <a href="#" class="botonhashtag">VER UBICACION</a>
  </div>
</div>`])
              .trigger('refresh.owl.carousel');

  
}




function addphoto(image){


  $('.carousel-builder-galery').trigger('add.owl.carousel', [`<div>
                          
  </div>
  <div class="text-center" style="padding: 2px;">
    <img src="`+image+`" alt="" height="150px" width="100px">
  </div>
</div>`])
        .trigger('refresh.owl.carousel');


$('.carousel-boho-galeria').trigger('add.owl.carousel', [`
<div class="item"><img class="img" src="`+image+`" width="350px" height="500px"></div>`])
              .trigger('refresh.owl.carousel');


  
}


function addgift(image){

  

  const titulo = document.getElementById('tituloregalo').value;

  const descripcion = document.getElementById('descripcion').value;

  const precio = document.getElementById('precio').value;

  const link = document.getElementById('link').value;


  $('.carousel-builder-regalo').trigger('add.owl.carousel', [`<div class="text-center" style="padding: 1px;">
  <img src="`+image+`" alt="" height="150px" width="100px">
  <span  class="text-dark">`+precio+`</span>
  <br>
  <span class="text-dark">`+descripcion+`</span>
</div>`])
        .trigger('refresh.owl.carousel');


        $('.carousel-boho-regalos').trigger('add.owl.carousel', [`<div class="card p-4">
        <img class="card-img-top" src="`+image+`" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">`+titulo+`</h5>
        <span class="card-text">Lampara Campana Colgante 40cm Nórdica Escandinaba Madera</span>
        <h5 class="cardprecio mt-3">`+precio+`</h5>
        <br>
        <a href="`+link+`" class="botonregalo">REGALAR</a>
        <br>
        <br>
        </div>
      </div>`])
              .trigger('refresh.owl.carousel');


}






  function weddytime(){

     var time = document.getElementById('weddy-time');

     const second = 1000,
     minute = second * 60,
     hour = minute * 60,
     day = hour * 24;


 console.log(new Date());

//I'm adding this section so I don't have to keep updating this pen every year :-)
//remove this if you don't need it
let today = new Date(),

   dd = String(today.getDate()).padStart(2, "0"),
   mm = String(today.getMonth() + 1).padStart(2, "0"),
   yyyy = today.getFullYear(),
   nextYear = yyyy + 1,
   dayMonth = "09/30/",
   birthday = dayMonth + yyyy;

today = mm + "/" + dd + "/" + yyyy;
if (today > birthday) {
 birthday = dayMonth + nextYear;
}
//end

console.log(new Date());

const countDown = new Date(time.value).getTime(),
   x = setInterval(function() { 


     const now = new Date().getTime(),
           distance = countDown - now;


     document.getElementById("days").innerText = Math.floor(distance / (day)),
       document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
       document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
       document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

     //do something later when date is reached
     if (distance < 0) {
       document.getElementById("headline").innerText = "It's my birthday!";
       document.getElementById("countdown").style.display = "none";
       document.getElementById("content").style.display = "block";
       clearInterval(x);
     }
     //seconds
   }, 0)
  }









