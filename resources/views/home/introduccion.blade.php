@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{asset('css/home/introduccion.css')}}">
@endsection

@section('content')

<swiper-container class="mySwiper" pagination="true" pagination-dynamic-bullets="true">
    <swiper-slide>
        <div id="divMenu">
            <div class="row">
                <div class="col-12 menus" id="menu">
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
  </swiper-container>

@endsection
@section('js')
    <script src="{{asset('js/home/introduccion.js')}}"></script>
@endsection
