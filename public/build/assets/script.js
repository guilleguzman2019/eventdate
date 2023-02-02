$(document).ready(function () {


  (function ($) {

    $('.owl-carousel').owlCarousel({

      navigation : true, // Show next and prev buttons
 
      slideSpeed : 300,
      paginationSpeed : 400,
 
      items : 3, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
      loop: false
 
    });



  })(jQuery);

});


$(document).ready(function() {

  

$('#yang').click(function() {

    
  $('.carousel-wrap').show();           
    
  $('.datosbancarios').hide(); 
    
});

$('#yin').click(function() {

    
  $('.carousel-wrap').hide();           
    
  $('.datosbancarios').show(); 
    
});

});

$(document).ready(function() {

window.onscroll = function() {
  //console.log("Vertical: " + window.scrollY);
  //.log("Horizontal: " + window.scrollX);

};


});


window.addEventListener("scroll", (event) => {
  let scroll = this.scrollY;
  //console.log(scroll)

if(scroll > 1400){

  document.getElementById('addEvent').style.display = "block";

}

if(scroll < 1400){

  document.getElementById('addEvent').style.display = "none";

}

if(scroll > 1900){

  document.getElementById('addEvent').style.display = "none";

}

if(scroll > 2150){

  document.getElementById('addGalery').style.display = "block";

}

if(scroll < 2150){

  document.getElementById('addGalery').style.display = "none";

}

if(scroll > 2850){

document.getElementById('addGalery').style.display = "none";

}

if(scroll > 4000){

document.getElementById('addBank').style.display = "block";

}

if(scroll < 4000){

document.getElementById('addBank').style.display = "none";

}

if(scroll > 5000){

document.getElementById('addBank').style.display = "none";

}


if(scroll > 5700){

document.getElementById('addTestigo').style.display = "block";

}

if(scroll < 5700){

document.getElementById('addTestigo').style.display = "none";

}

if(scroll > 6350){

document.getElementById('addTestigo').style.display = "none";

}


});


function uploadFile(files) {
  console.log('Files:', files);
  console.log('Upload initial');
}



var track = document.getElementById("track");

var controlBtn = document.getElementById("play-pause");




function playPause() {
    if (track.paused) {
        track.play();
        //controlBtn.textContent = "Pause";
        controlBtn.className = "pause";
    } else { 
        track.pause();
         //controlBtn.textContent = "Play";
        controlBtn.className = "play";
    }
}

controlBtn.addEventListener("click", playPause);
track.addEventListener("ended", function() {
  controlBtn.className = "play";
});






function remove_image(trigger) {

  var $item = $(trigger).closest('.owl-item');
  console.log($item);
  var index = $item.closest('.owl-stage').children().index($item);
  $item.closest('.owl-carousel').owlCarousel('remove', index).owlCarousel('update');


  $('.owl-carousel').owlCarousel({

    navigation : true, // Show next and prev buttons

    slideSpeed : 300,
    paginationSpeed : 400,

    items : $('.owl-carousel .item').length, 
    itemsDesktop : false,
    itemsDesktopSmall : false,
    itemsTablet: false,
    itemsMobile : false,
    loop: false

});

  console.log($('.owl-carousel .item').length);
}




function addguille(){

  console.log('hola mundo');

  document.getElementsByClassName('owl-item')[3].style.display = "block";

  var evts = $('.owl-carousel .item').length ;

  

}

function addedit(){

  var evts = $('.owl-carousel .item').length ;

  $('.owl-carousel').trigger('add.owl.carousel', [`<div class="item card p-4 two" >
  <br>
  <img class="card-img-top" src="http://2.bp.blogspot.com/--xxynRG0ycg/VjEUQUNVKpI/AAAAAAAAAC8/Aj_aRspCICc/s1600/catedral1.jpg" alt="Card image cap" height="450px" width="150px">
  <div class="card-body text-center">
  <input wire:model.defer="arrayEventEdit.{{$index}}.title" class="card-title" type="text" placeholder="">
  <input wire:model.defer="arrayEventEdit.{{$index}}.place_name" class="card-lugar" placeholder="Catedral de cordoba">
  <input wire:model.defer="" class="card-text" type="date" placeholder="dia de la ceremonia">
  <input wire:model.defer="" class="card-text" placeholder="Colon 677, Cordoba">
  <br>
  <br>
  <a href="#" class="botonhashtag">VER UBICACION</a>
  </div>
</div>`])
        .trigger('refresh.owl.carousel');

    

console.log($('.owl-carousel .item').length);

}


livewire.on('addEvent', () => {

  $('.owl-carousel').owlCarousel({

    navigation : true, // Show next and prev buttons

    slideSpeed : 300,
    paginationSpeed : 400,

    items : 5, 
    itemsDesktop : false,
    itemsDesktopSmall : false,
    itemsTablet: false,
    itemsMobile : false,
    loop: false

  });
});



function eliminar(){

  var remove = $('.owl-carousel .item').length ;

  console.log(remove);

  $(".owl-carousel").trigger('remove.owl.carousel', [-1]).trigger('refresh.owl.carousel');


  $('.owl-carousel').owlCarousel({

    navigation : true, // Show next and prev buttons

    slideSpeed : 300,
    paginationSpeed : 400,

    items : $('.owl-carousel .item').length, 
    itemsDesktop : false,
    itemsDesktopSmall : false,
    itemsTablet: false,
    itemsMobile : false,
    loop: false

  });
}




































