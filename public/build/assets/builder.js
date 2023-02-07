$('#owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    items : 2,
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



