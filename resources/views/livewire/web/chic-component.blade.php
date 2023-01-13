@extends('layouts.template')

@section('css')
    <link rel="stylesheet" href="{{asset('/build/assets/chic.css')}}">
@stop

@php


	$timestamp=date('Y-m-d',strtotime($card -> start_date));

@endphp
@if(Request::get('edit'))

<div>
    <div class="container-fluid p-4" id="boton_cont">
        <div class="row">
          <div class="col align-self-start">
            <button id="boton" class="btn btn-success text-white" wire:click="save" wire:target="save">Actualizar</button>
            <a style="color:white;"target="_blank" href="http://localhost:8000/invitacion/{{$card->slug}}"><button class="btn btn-primary" >VER</button></a>

          </div>
          <div class="col align-self-center">
            
          </div>
          <div class="col align-self-end">
          </div>
        </div>
    </div>

@endif
<header>
    <!-- Header Start -->
    <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--? Slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height hero-overly d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-8 col-lg-6 col-md-8 ">
                            <div class="hero__caption">
                                @if(Request::get('edit'))
                                    <input class="date-input" wire:model.defer="fecha" type="date" value="{{$timestamp}}" style="background-color:transparent; color:white; font-family: 'Dancing Script'; font-size:34px; border: 0;">
                                @else
                                <span data-animation="fadeInLeft" data-delay=".3s">{{$timestamp}}</span>
                                @endif
                                @if(Request::get('edit'))
			                        <input id="titulo" wire:model.defer="titulo" type="text" value="{{$card->title}}" style="width: 800px; background-color:transparent; color:white; font-family: 'Dancing Script' ; font-size:110px; font-weight: bold; border: 0; z-index:999;">
		                        @else
                                    <h1 data-animation="fadeInLeft" data-delay=".5s" data-duration="2000ms">{{$card -> title }}</h1>
		                        @endif
                                <p data-animation="fadeInLeft" data-delay=".9s">Nos Casamos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->
    <!--? Our Story Start -->
    <div class="Our-story-area story-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-70">
                        <h2>Nuestra historia de amor​</h2>
                        <br>
                        <img src="assets/img/gallery/tittle_img.png" alt="">
                        @if(Request::get('edit'))
                            <textarea class="fm" wire:model.defer="historia" rows="4" cols="50" style="background-color:transparent; color:black; font-family: 'Dancing Script'; font-size:20px; border: 0; overflow:hidden;">{{$card -> history_description}}</textarea>
                        @else
                            <p>{{$card-> history_description}}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Story End -->
    <!--? Services Start -->
    <!-- Services Card End -->
    <!--? Count Down Start -->
    <div class="count-down-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper" data-background="assets/img/gallery/section_bg2.png">
                        <div class="row justify-content-between">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter">23</span>
                                    <p>days</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter active text-center">
                                    <span class="counter">15</span>
                                    <p>hours</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter">46</span>
                                    <p>mins</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter">20</span>
                                    <p>secs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Count Down End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img" style="background-image: url(assets/img/gallery/gallery1.png);">
                        </div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3>image 01</h3>
                                <a href="assets/img/gallery/gallery1.png" class="menorie-icon"> <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img" style="background-image: url(assets/img/gallery/gallery2.png);">
                        </div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3>image 02</h3>
                                <a href="assets/img/gallery/gallery1.png" class="menorie-icon"> <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img" style="background-image: url(assets/img/gallery/gallery3.png);">
                        </div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3>image 03</h3>
                                <a href="assets/img/gallery/gallery1.png" class="menorie-icon"> <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img" style="background-image: url(assets/img/gallery/gallery4.png);">
                        </div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3>image 04</h3>
                                <a href="assets/img/gallery/gallery1.png" class="menorie-icon"> <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!--? Gift Start -->
    <!-- Gift End -->
    <!--? Contact form Start -->
   
  
    <!--? End map Area -->
</main>

@if(Request::get('edit'))

@section('js')
    <script>

document.addEventListener('DOMContentLoaded',function(){

let options = [
    {
        label: 'Text Color',
        type: 'color',
        property: 'textcolor',
        default: '#fff'
    },
    {
        label: 'Box Color',
        type: 'color',
        property: 'boxcolor',
        default: 'orange'
    },
    {
        label: 'Padding',
        type: 'range',
        property: 'padding',
        attributes: {min: "20", max: "90"},
        default: '20'
    },
    {
        label: 'Margin',
        type: 'number',
        property: 'margin',
        attributes: {min: "20", max: "90"},
        default: '20'
    },
    {
        label: 'Font Size',
        type: 'range',
        property: 'fontsize-h2',
        attributes: {min: "20", max: "200"},
        default: '20'
    },
    {
        label: 'Font Size Paragraph',
        type: 'range',
        property: 'fontsize-p',
        attributes: {min: "18", max: "30"},
        default: '14'
    }
];

let styler_Editor = document.createElement('div');
styler_Editor.classList.add('styler-editor');

document.querySelector('body').appendChild(styler_Editor);

function setAttributes(el, attrs) {
  for(var key in attrs) {
    el.setAttribute(key, attrs[key]);
  }
}

options.forEach((option, i) => {

    let optionLabel = document.createElement('label');
    optionLabel.innerHTML = option.label;
   
    let optionField = document.createElement('input');
    optionField.type = option.type;
    optionField.value = option.default;
    setAttributes(optionField,option.attributes);
    styler_Editor.appendChild(optionLabel);
    styler_Editor.appendChild(optionField);

    optionField.addEventListener('change',function(){
       switch(option.type){
         case 'range':
         document.getElementById('titulo').style.setProperty("font-size", optionField.value+'px');
           break;
         case 'number':
         document.getElementById('titulo').style.setProperty("background-color", "yellow");
           break;
         case 'color':
         document.getElementById('titulo').style.setProperty("color", optionField.value);
           break;
         case 'text':
         document.getElementById('titulo').style.setProperty("background-color", "yellow");
           break;
       }
      
    });
});

});
    </script>
@stop

@endif