@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{asset('public/css/home/obras.css')}}">
@endsection

@section('content')

<swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
  <swiper-slide>
    <img src="{{asset('public/img/05LacaidadeIcaro.jpg')}}" alt="La caída de Ícaro" id="imgCairo" onclick="modalImagen('imgCairo')">
    <br>
    <center><p class="titulo">“La caída de Ícaro”</p></center>
    <center><p class="subTitulo">Año- 2001 | 60” x 60” | Tela oxidada</p></center>
  </swiper-slide>
  <swiper-slide>
    <img src="{{asset('public/img/Dafne.jpg')}}" alt="Dafne" id="imgDafne" onclick="modalImagen('imgDafne')">
    <br>
    <center><p class="titulo">"Dafne"</p></center>
    <center><p class="subTitulo">Año - 2017 | 60” x 48” | medio mixto</p></center>
  </swiper-slide>
  <swiper-slide>
    <img src="{{asset('public/img/belerofonte.jpg')}}" alt="Belerofontes sobre Pegaso" id="imgbelerofonte" onclick="modalImagen('imgbelerofonte')">
    <br>
    <center><p class="titulo">“Belerofontes sobre Pegaso”</p></center>
    <center><p class="subTitulo">Año - 2018 | 60” x 72” | medio mixto</p></center>
  </swiper-slide>
  <swiper-slide>
    <img src="{{asset('public/img/ledacisne.jpg')}}" alt="Leda y el cisne" id="imgLedacisne" onclick="modalImagen('imgLedacisne')">
    <br>
    <center><p class="titulo">“Leda y el cisne”</p></center>
    <center><p class="subTitulo">Año - 2018 | 60” x 48” | medio mixto</p></center>
  </swiper-slide>
  <swiper-slide>
    <img src="{{asset('public/img/hector.jpg')}}" alt="Héctor" id="imghector" onclick="modalImagen('imghector')">
    <br>
    <center><p class="titulo">“Héctor”</p></center>
    <center><p class="subTitulo">Año - 2001 | 48” x 60” | Tela oxidada</p></center>
  </swiper-slide>
  <swiper-slide>
    <img src="{{asset('public/img/15Zeus.jpg')}}" alt="Zeus" id="imgZeus" onclick="modalImagen('imgZeus')">
    <br>
    <center><p class="titulo">“Zeus”</p></center>
    <center><p class="subTitulo">Año - 2001 | 60” x 48” | Tela oxidada</p></center>
  </swiper-slide>
  <swiper-slide>
    <img src="{{asset('public/img/prTeo.jpg')}}" alt="PR-ome Teo encadenado" id="imgTeo" onclick="modalImagen('imgTeo')">
    <br>
    <center><p class="titulo">“PR-ome Teo encadenado”</p></center>
    <center><p class="subTitulo">Año - 2018 | 60” x 72” | medio mixto</p></center>
  </swiper-slide>
  <swiper-slide>
    <img src="{{asset('public/img/19Morfeo.jpg')}}" alt="Morfeo" id="imgMorfeo" onclick="modalImagen('imgMorfeo')">
    <br>
    <center><p class="titulo">“Morfeo”</p></center>
    <center><p class="subTitulo">Año - 2001 | 60” x 60” | Tela oxidada</p></center>
  </swiper-slide>
</swiper-container>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" class="homeIcon" width="128" height="128" viewBox="0 0 32 32"><path fill="#333333" d="M16.612 2.214a1.01 1.01 0 0 0-1.242 0L1 13.419l1.243 1.572L4 13.621V26a2.004 2.004 0 0 0 2 2h20a2.004 2.004 0 0 0 2-2V13.63L29.757 15L31 13.428ZM18 26h-4v-8h4Zm2 0v-8a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v8H6V12.062l10-7.79l10 7.8V26Z"/></svg>
  @endsection
@section('js')
    <script src="{{asset('public/js/home/obras.js')}}"></script> 
@endsection
