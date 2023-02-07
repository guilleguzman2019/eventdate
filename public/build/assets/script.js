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

/*
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

*/


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

/*
$(document).ready(function(){

  (function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
  
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
    
    const countDown = new Date(birthday).getTime(),
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
    }());
});

*/



  $(document).ready(function() {
    //toggle the component with class accordion_body
    $(".accordion_head").click(function() {
      if ($('.accordion_body').is(':visible')) {
        $(".accordion_body").slideUp(300);
        $(".plusminus").text('+');
      }
      if ($(this).next(".accordion_body").is(':visible')) {
        $(this).next(".accordion_body").slideUp(300);
        $(this).children(".plusminus").text('+');
      } else {
        $(this).next(".accordion_body").slideDown(300);
        $(this).children(".plusminus").text('-');
      }
    });
  });


  

    const view = document.getElementById('portada');

    const btnportada = document.getElementById("my-button");

    view.addEventListener('click', (e) => {

      if(event.target.className == 'tituloParejas'){

        return 
      }


      if (btnportada.style.display === "none") {

        btnportada.style.display = "block";

        console.log(1);

      } else {

        btnportada.style.display = "none";

        console.log(2);
      }

    });
  





  window.onload = function() {
    const hijo = document.querySelector('.tituloParejas');			
    const padre = document.querySelector('.view');

    hijo.addEventListener('mouseenter', function() {
      this.style.border = '3px solid cyan';
      padre.style.border = '';
          
    });
    
    hijo.addEventListener('mouseleave', function() {  
      this.style.border = '';
      padre.style.border = '3px solid cyan';
    });		
    
    padre.addEventListener('mouseenter', function() {
      this.style.border = '3px solid cyan';
          
    });
    
    padre.addEventListener('mouseleave', function() {  
      this.style.border = '';
    });		
  };




 


































