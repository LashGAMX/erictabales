@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{asset('css/home/introduccion.css')}}">
@endsection

@section('content')

<div class="swiper" >
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="row">
                <div class="col-12 menus" id="menu" >
                    <p>INTRODUCCIÓN</p>
                </div>
                <div class="col-12 menus" id="menu2">
                    <p>TITULO</p>
                </div>
                <div class="col-12 menus" id="menu3">
                    <p>TITULO</p>
                </div>
                <div class="col-12 menus" id="menu4">
                    <p>TITULO</p>
                </div>
                <div class="col-12 menus" id="menu5">
                    <p>TITULO</p>
                </div>
                <div class="col-12 menus" id="menu6">
                    <p>TITULO</p>
                </div>
                <div class="col-12 menus" id="menu7">
                    <p>OBRAS</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="image-container">
                <img src="{{asset('img/Dafne.jpg')}}" alt="Dafne.jpg" id="imgDafne">
            </div>
        </div>
        <div class="swiper-slide slide3">
            <svg xmlns="http://www.w3.org/2000/svg" class="homeIcon" width="128" height="128" viewBox="0 0 32 32"><path fill="#333333" d="M16.612 2.214a1.01 1.01 0 0 0-1.242 0L1 13.419l1.243 1.572L4 13.621V26a2.004 2.004 0 0 0 2 2h20a2.004 2.004 0 0 0 2-2V13.63L29.757 15L31 13.428ZM18 26h-4v-8h4Zm2 0v-8a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v8H6V12.062l10-7.79l10 7.8V26Z"/></svg>
            <div class="barra">
                
            </div>
            <div class="container slide3Scroll">
                <div class="row">
                    <div class="col-12 slide3Title">
                        <p>Carta de</p>
                        <p>Introducción</p>
                    </div>
                    <div class="slide3Content">
                        <p>
                            Es un honor presentarles mi proyecto, un viaje
                            artístico de 25 años que culmina en una exhibición
                            única y trascendental. A lo largo de este tiempo, he
                            creado 100 obras que exploran mitos y dioses, no
                            sólo como figuras históricas, sino como espejos de
                            nuestras propias luchas y triunfos en la vida moderna.
                        </p>
                        <p>
                            El viaje comenzó en el año 2000, cuando concebí las
                            primeras 100 obras, aunque la primera presentación
                            pública no llegó hasta el 2004, solo 35 obras,
                            titulada “Mitos y dioses” con sede en el Museo de
                            Las Américas, Viejo San Juan. Desde entonces, la
                            vida misma se convirtió en una narrativa en mis
                            creaciones: desde los desafíos personales hasta los
                            eventos catastróficos como el huracán María, que
                            azota Puerto Rico en 2017. Ambos, impactaron mi
                            proceso creativo de manera profunda y permanente.
                        </p>
                        <p>
                            Mi identidad como parte de la comunidad
                            LGBTTIQ+ ha influido enormemente en mi obra,
                            especialmente en la representación de diosas a
                            través de amigos que comparten mi experiencia y
                            lucha.
                        </p>
                        <p>
                            La adversidad se convirtió en inspiración, y el
                            resultado fue “Punto Medio: mitos y dioses”, en
                            octubre de 2018. Esta exhibición fue una expresión
                            de resiliencia y liberación del alma.
                        </p>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Obras</div>

    </div>
    <div class="swiper-pagination"></div>
</div>

{{-- <swiper-container class="mySwiper" pagination="true" pagination-dynamic-bullets="true">
    <swiper-slide>
        <div id="divMenu">
            <div class="row">
                <div class="col-12 menus" id="menu" >
                    <p>INTRODUCCIÓN</p>
                </div>
                <div class="col-12 menus" id="menu2">
                    <p>TITULO</p>
                </div>
                <div class="col-12 menus" id="menu3">
                    <p>TITULO</p>
                </div>
                <div class="col-12 menus" id="menu4">
                    <p>TITULO</p>
                </div>
                <div class="col-12 menus" id="menu5">
                    <p>TITULO</p>
                </div>
                <div class="col-12 menus" id="menu6">
                    <p>TITULO</p>
                </div>
                <div class="col-12 menus" id="menu7">
                    <p>TITULO</p>
                </div>
            </div>
        </div>
    </swiper-slide>
    <swiper-slide>Slide 2</swiper-slide>
    <swiper-slide>Slide 3</swiper-slide>
    <swiper-slide>Slide 4</swiper-slide>
    <swiper-slide>Slide 5</swiper-slide>
    <swiper-slide>Slide 6</swiper-slide>
    <swiper-slide>Slide 7</swiper-slide>
    <swiper-slide>Slide 8</swiper-slide>
    <swiper-slide>Slide 9</swiper-slide>
</swiper-container>  --}}


  @endsection
@section('js')
    <script src="{{asset('js/home/introduccion.js')}}"></script> 
@endsection
