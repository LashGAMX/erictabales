@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{asset('public/css/home/home.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <p>Eric</p>
            <p>Tabales</p>
        </div>
        <div class="col-12">
            <div class="artista">
                <p class="txtArtista">ARTISTA</p>
            </div>
        </div>
        <div class="col-12">
            <br>
            <center><button class="btn" id="btnIntroduccion"><i class="animation"></i>Iniciar<i class="animation"></i></button>         </center>
        </div>
    </div>

</div>
@endsection 
@section('js')
    <script src="{{asset('public/js/home/home.js')}}"></script>
@endsection
