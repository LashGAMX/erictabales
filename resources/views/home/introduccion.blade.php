@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{asset('public/css/home/introduccion.css')}}">
@endsection

@section('content')

<swiper-container class="mySwiper" pagination="true" pagination-dynamic-bullets="true" scrollbar="true">
    <swiper-slide>
        <div class="row">
            <div class="col-12 menus" id="menu" >
                <p>INTRODUCCIÓN</p>
            </div>
            <div class="col-12 menus" id="menu2">
                <p>LISTA PRELIMINAR DE OBRAS</p>
            </div>
            <div class="col-12 menus" id="menu3">
                <p>CURRICULUM VITAE</p>
            </div>
            <div class="col-12 menus" id="menu4">
                <p>CURRICULUM VITAE</p>
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
    </swiper-slide>

    <swiper-slide>
        <div class="image-container">
            <img src="{{asset('public/img/Dafne.jpg')}}" alt="Dafne.jpg" id="imgDafne">
            <button id="btnVideo" type="button"   data-bs-toggle="modal" data-bs-target="#myModal">
                <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="26px"><path d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z" fill="currentColor"></path></svg>
              </button>
        </div>
    </swiper-slide>

    <swiper-slide>
        
     </div>
            <div class="row">
                <div class="col-12">                    
                    <div class="barra"></div>
                    <img src="{{asset('public/img/home.png')}}" class="homeIcon"  alt="home" id="homeIcon">
        
                </div>
                <div class="col-12 slide3Title tituloInt">
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
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon"  alt="home" id="homeIcon">
            </div>
            <div class="col-12">
                <div class="slide3Content">
                    <p>
                        Maxime cuando más de la mitad de los modelos son
                        de origen mexicano.
                    </p>
                    <p>
                        Mis maestros mexicanos y puertorriqueños están
                        presentes en cada pincelada, recordándome que el
                        comienzo puede ser el final, y el final puede ser el
                        comienzo. Porque dentro de mí habita otro, y en cada
                        obra, cada mito, encuentro un reflejo de mi propia
                        humanidad.
                    </p>
                    <p>
                        Espero que esta carta de introducción capture la
                        esencia y el argumento curatorial de mi propuesta
                        para la exhibición de 25 años de elaboración. Estoy
                        emocionado de compartir este viaje con México y
                        con todos los que se sumerjan e identifiquen con esta
                        experiencia.
                    </p>
                    <br>
                    <p class="subIntroduccion">Con gratitud, emoción y respeto,</p>
                    <div class="nameIntro">
                        <p>Eric Tabales</p>
                        <p class="artistaIntro">Artista</p>
                    </div>
                </div>
            </div>
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra2"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon"  alt="home" id="homeIcon">
            </div>
            <div class="col-12 slide3Title tituloInt">
                <p>Lista</p>
                <p>preliminar</p>
                <p>de obras</p>
            </div>
            <div class="slide3Content">
                <div class="subTituloCon">
                    <p class="txtSubCon">&nbsp; “Exposición mitos y dioses”</p>
                </div>
                <p>
                    Las obras presentadas en este listado poseen
                    varias procedencias. Unas están en la colección del
                    artista, otras en colecciones privadas, gobierno e
                    instituciones corporativas.
                </p>
                <p>
                    La mayoría se conoce su procedencia, y están
                    accesibles para su presentación. Entiendo que por
                    la magnitud de la exhibición, la misma será curada
                    por los curadores de los tres Museos en Puerto Rico,
                    México y Estados Unidos.
                </p>

            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra2"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon"  alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <ul>
                        <li>
                            <div class="numLista">
                                1 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Helio”
                                </div>
                                <div class="subLista">
                                    Año- 2000 | 72” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                2 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Hermes”
                                </div>
                                <div class="subLista">
                                    Año- 2000 | 60” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                3 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Centauro anunciando el amanecer”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 48” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                4 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Poseidón”
                                </div>
                                <div class="subLista">
                                    Año- 2002 | 60” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                5 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “La caída de Ícaro”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 60” x 60” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                6 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Céfiro”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 48” x 60” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                7 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “La concepción de Heracles”
                                </div>
                                <div class="subLista">
                                    Año- 2002 | 60” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                8&nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Apolo”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 48” x 60” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                9 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Eros”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 40” x 60” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                10
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Perseo y la cabeza de Medusa”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 60” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                    </ul>7
                </div>
            </div>
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra2"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon"  alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <ul>
                        <li>
                            <div class="numLista">
                                11 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Eolo”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 60” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                12 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Mi primera diosa” “Palas Atenea”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 60” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                13 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Centauro anunciando el amanecer
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 48” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                14 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Teseo”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 60” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                15 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Zeus”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 60” x 60” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                16 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Hera”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 48” x 60” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                17 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Afrodita y la manzana de la discordia”
                                </div>
                                <div class="subLista">
                                    Año- 2002 | 60” x 48” | Tela oxidad
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                18&nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Ixión y la rueda de fuego”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 60” x 60” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                19 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Morfeo”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 60” x 60” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                20
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “La castración de Urano”
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 72” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra2"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon"  alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <ul>
                        <li>
                            <div class="numLista">
                                21 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Ascención de Orión y Sirio”
                                </div>
                                <div class="subLista">
                                    Año- 2003 | 48” x 72” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                22 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Selene
                                </div>
                                <div class="subLista">
                                    Año- 2001 | 72” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                23 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Narciso”
                                </div>
                                <div class="subLista">
                                    Año- 2003 | 60” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                24 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Hero en las aguas del Helesponto”
                                </div>
                                <div class="subLista">
                                    Año- 2003 | 48” x 60” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                25 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “La caída de Faetón”
                                </div>
                                <div class="subLista">
                                    Año- 2000 | 48” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                26 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “La fervorosa Clitia”
                                </div>
                                <div class="subLista">
                                    Año- 2002 | 48” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                27 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Cipariso”
                                </div>
                                <div class="subLista">
                                    Año- 2003 | 48” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                28&nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Arión”
                                </div>
                                <div class="subLista">
                                    Año- 2002 | 60” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                29 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Endimión”
                                </div>
                                <div class="subLista">
                                    Año- 2002 | 60” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                30 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Orfeo en las puertas del Tártaro”
                                </div>
                                <div class="subLista">
                                    Año- 2003 | 48” x 72” | Tela oxidada
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra2"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon"  alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <ul>
                        <li>
                            <div class="numLista">
                                31 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Diana cazadora”
                                </div>
                                <div class="subLista">
                                    Año- 2002 | 60” x 36” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                32 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Aracne”
                                </div>
                                <div class="subLista">
                                    Año- 2003 | 54” x 54” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                33 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Hefesto”
                                </div>
                                <div class="subLista">
                                    Año- 2000 | 60” x 48” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                34 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Gea”
                                </div>
                                <div class="subLista">
                                    Año- 2003 | 54” x 54” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                35 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Hades”
                                </div>
                                <div class="subLista">
                                    Año- 2003 | 48” x 36” | Tela oxidada
                                </div>
                            </div>
                        </li>
                        <li style="margin-top: 5%">
                            <center><p style="font-size: 20px; font-weight: bold">“PUNTO MEDIO: MITOS Y DIOSES”</p></center>
                        </li>
                        <li>
                            <div class="numLista">
                                36 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Dafne”
                                </div>
                                <div class="subLista">
                                    Año- 2017 | 60” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                37 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Dioniso”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 60” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                38&nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Psique”
                                </div>
                                <div class="subLista">
                                    Año- 2017 | 60” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                39 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Aquiles”
                                </div>
                                <div class="subLista">
                                    Año- 2017 | 48” x 60” | Medio mixto
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra2"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon"  alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <ul>
                        <li>
                            <div class="numLista">
                                40 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Deméter”
                                </div>
                                <div class="subLista">
                                    Año- 2017 | 60” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                41 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Tritón”
                                </div>
                                <div class="subLista">
                                    Año- 2017 | 48” x 60” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                42 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Héctor”
                                </div>
                                <div class="subLista">
                                    Año- 2017 | 48” x 60” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                43 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Némesis”
                                </div>
                                <div class="subLista">
                                    Año- 2017 | 60” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                44 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Peleo entregando a Aquiles”
                                </div>
                                <div class="subLista">
                                    Año- 2017 | 60” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                45 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Cronos ignorando al tiempo”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 48” x 60” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                46 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Ulises y el arco”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 60” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                47&nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Cloto”
                                </div>
                                <div class="subLista">
                                    Año- 2017 | 60” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                48 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Láquesis”
                                </div>
                                <div class="subLista">
                                    Año- 2017 | 60” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                49
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Átropo”
                                </div>
                                <div class="subLista">
                                    Año- 2017 | 60” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra2"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon"  alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <ul>
                        <li>
                            <div class="numLista">
                                50 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “El juicio de Paris”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 72” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                51 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Atlas”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 72” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                52 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Pigmalión y Galatea”
                                </div>
                                <div class="subLista">
                                    Año- 2017 | 72” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                53 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “PR-ome Teo encadenado”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 60” x 72” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                54 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    Heracles y las yeguas de Diomedes
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 60” x 72” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                55 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Midas”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 60” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                56 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Rea”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 48” x 72” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                57&nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Belerofontes sobre Pegaso”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 60” x 72” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                58 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Cloris”
                                </div>
                                <div class="subLista">
                                    Año- 2017 | 60” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                59
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Leda y el cisne”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 60” x 48” | Medio mixto
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra2"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon"  alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <ul>
                        <li>
                            <div class="numLista">
                                70 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Terpsícore (Amante del baile)”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 60” x 40” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                71 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Urania (La celeste)”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 60” x 40” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                72 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Calíope (La de bella voz)”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 60” x40” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                73 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Talía (La festiva)”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 60” x 40” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                74 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Melpómene (La celebrada en cantos)”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 60” x 40” | Medio mixto
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="numLista">
                                75 &nbsp;
                            </div>
                            <div class="containerLista">
                                <div class="tituloLista">
                                    “Erato (La adorable)”
                                </div>
                                <div class="subLista">
                                    Año- 2018 | 60” x 40” | Medio mixto
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 tituloCurri">
                <div class="container">
                    <p>Curriculum</p>
                    <p style="color: #6b1a9a">Vitae</p>
                    <div class="nameCurri">
                        <p>Eric Tabales</p>
                    </div>
                </div>
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">EDUCATION:</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2" style="font-weight: normal">ACADEMIC DEGREES:</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="tablaTitulo">
                                <p>a) &nbsp;</p>
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    MFA (M.A. in Visual Arts, Painting). Academia de
                                    San Carlos, Escuela Nacional de Artes Plásticas,
                                    Universidad Nacional Autónoma de México. 1995.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="tablaTitulo">
                                <p>b) &nbsp;</p>
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    B.A in Visual Arts, Major in Painting, University of
                                    Puerto Rico, Río Piedras Campus. 1993.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="tablaTitulo">
                                <p>c) &nbsp;</p>
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    Post B.A. in Medical Technology. University of Puerto
                                    Rico. Escuela de Medicina de San Juan, Puerto Rico.
                                    1988.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="tablaTitulo">
                                <p>d) &nbsp;</p>
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    B.A in Natural Sciences, Major in Chemistry and
                                    Biology. University of Puerto Rico, Río Piedras
                                    Campus. 1985.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">TEACHING EXPERIENCE:</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2005 – Present
                                </p>
                                <p class="tablaContenido">
                                    Resident Artist. Universidad Central de Bayamón.
                                    Bayamón, Puerto Rico.
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">

                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2001 - 2005
                                </p>
                                <p class="tablaContenido">
                                    Professor. Graduate Program. Inter American
                                    University of Puerto Rico. San German Campus.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1996 - 2001
                                </p>
                                <p class="tablaContenido">
                                    Professor. University of Puerto Rico, Río Piedras
                                    Campus, Humanities College, Department of Fine
                                    Arts.
                                </p>
                            </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">INDIVIDUAL EXHIBITS:</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1996 - 2001
                                </p>
                                <p class="tablaContenido">
                                    Professor. University of Puerto Rico, Río Piedras
                                    Campus, Humanities College, Department of Fine
                                    Arts.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   2023
                                </p>
                                <p class="tablaContenido">
                                    Puerto Rico: un homenaje a nuestra historia. Museo
                                    de Las Américas, Viejo San Juan, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2021
                                </p>
                                <p class="tablaContenido">
                                    Corceles . Galería SPACE, San Patricio Plaza,
                                    Guaynabo, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2020
                                </p>
                                <p class="tablaContenido">
                                    Puerto Rico Iluminado. Galería SPACE,San Patricio
                                    Plaza, Guaynabo, P. R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2019
                                </p>
                                <p class="tablaContenido">
                                    Punto medio, mitos y dioses Bocetos. Puebla
                                    Centro, Puebla, México.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   2018
                                </p>
                                <p class="tablaContenido">
                                    Punto medio; mitos y dioses. Museo de Las
                                    Américas, Ballajá. San Juan, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2017
                                </p>
                                <p class="tablaContenido">
                                    La Vida en amarillo. Galería SPACE, San Patricio
                                    Plaza, Guaynabo, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                  2016
                                </p>
                                <p class="tablaContenido">
                                    Mares. Galería Gandía, San Juan, P.R.
                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>
 
    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2014
                                </p>
                                <p class="tablaContenido">
                                    Magazine. Galería SPACE, San Patricio, Guaynabo,
                                    P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   2013
                                </p>
                                <p class="tablaContenido">
                                    Flowers. Sala de Las Artes, Universidad del Sagrado
                                    Corazón, San Juan, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2010
                                </p>
                                <p class="tablaContenido">
                                    Música II. Casa Ashford. San Juan, P.R
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2009
                                </p>
                                <p class="tablaContenido">
                                    “Arcangeles”. Torre Santander, San Patricio Plaza,
                                    Guaynabo, Puerto Rico.
                                    <br>
                                    “Archangel’s”. Santander Tower, San Patricio
                                    Plaza,Guaynabo, Puerto Rico.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2008
                                </p>
                                <p class="tablaContenido">
                                    “Arias	de	Operas”.	Water	Mill,	Plantation	Golf Club,Dorado, Puerto Rico.
                                    <br>
                                    “Operah Arias”. Water Mill, Plantation Golf Club, Dorado, Puerto Rico.
                                    
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   2006
                                </p>
                                <p class="tablaContenido">
                                    “Música”. Calería URI. San Juan, Puerto Rico. 
                                    “Music”. Uri Art Gallery. San Juan, Puerto Rico.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2005
                                </p>
                                <p class="tablaContenido">
                                    “Santos”. Galería de Las Artes. Universidad del Sagrado Corazón, Santurce, Puerto Rico.
                                    <br>
                                    “Saints”. Gallery of the Arts. University of Sacred Heart. Santurce, Puerto Rico.
                                    
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                  2004
                                </p>
                                <p class="tablaContenido">
                                    “Mitos y dioses”. Museo de Las Américas. Cuartel de Ballajá. San Juan, Puerto Rico.
                                    <br>
                                    “Myths and gods”. Museo de Las Américas. Cuartel de Ballajá. San Juan, Puerto Rico.
                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>
  
    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2002
                                </p>
                                <p class="tablaContenido">
                                    “Cariátides”. Petrus Galeros. Avenida Andalucía, Puerto Nuevo. Puerto Rico (“Caryatids”, Petrus Gallery Group, Avenida Andalucia, Puerto Nuevo, Puerto Rico).
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   2000
                                </p>
                                <p class="tablaContenido">
                                    “Enigmas y Bestias”. Petrus Galeros. Avenida Andalucía, Puerto Nuevo. Puerto Rico. (“Enigmas and Beasts”, Petrus Gallery Group, Avenida Andalucia, Puerto Nuevo, Puerto Rico).
                                    <br><br>
                                    “Bestiario” Galería Arcadia. Madrid, España. (“Beastiary”, Arcadia Gallery, Madrid, Spain).
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1999
                                </p>
                                <p class="tablaContenido">
                                    Entrepapel, cristalytela. Antiguo Arsenaldela Marina. Instituto de Cultura Puertorriqueña, San Juan, Puerto Rico. (“Between paper, glass, and cloth”, Old Arsenal of the Marine, Institute of Puerto Rican Culture, San Juan Puerto Rico)
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1998
                                </p>
                                <p class="tablaContenido">
                                    “Entre Símbolos y Mandamientos”. Galería de Arte, Universidad del Sagrado Corazón, Santurce, Puerto Rico. (“Between Symbols and Commandments”, Gallery of Art, University of Sacred Heart, Santurce, Puerto Rico).
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1996
                                </p>
                                <p class="tablaContenido">
                                    “Frágil”. Galería Botello, Avenida Roosevelt, San Juan, Puerto Rico. (“Fragile”, Botello Gallery, Avenida Roosevelt, San Juan, Puerto Rico).
                                    <br>
                                    <br>
                                    “Oxídos”. Galería de Arte. Universidad del Sagrado Corazón. (“Oxides”, Art Gallery, University of Sacred Heart)
                                </p>
                            </td>
                        </tr>
          
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1995
                                </p>
                                <p class="tablaContenido">
                                    Capilla de Meditación Juan Acha. Escuela Nacional de Artes Plásticas. Universidad Autónoma de México, Ciudad México. (The Juan Acha Chapel of Meditation, Autonomous University of Mexico, Mexico City, Mexico).
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   1990
                                </p>
                                <p class="tablaContenido">
                                    Rostros. GaleríadeArte, DepartamentodeEducación, San Juan, Puerto Rico. (“Faces”, Art Gallery, Department of Education, San Juan, P.R.)
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1985
                                </p>
                                <p class="tablaContenido">
                                    Pensamientos. Galería MSA, Viejo San Juan, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">MONUMENTAL SCULPTURES:</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2017
                                </p>
                                <p class="tablaContenido">
                                    Vitrales San Francisco de Asís, Viejo San Juan, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2012
                                </p>
                                <p class="tablaContenido">
                                    Generaciones. Centro de Convenciones Ramón E. Betances, Cabo Rojo, P.R.
                                    <br>
                                    Cruz y Puertas. Columbario de la Capilla Mayor Universidad del Sagrado Corazón, San Juan, P.R.

                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   2011
                                </p>
                                <p class="tablaContenido">
                                    Capilla Stubbe. Dorado, Puerto Rico.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2010
                                </p>
                                <p class="tablaContenido">
                                    El Otello de Paoli. Centro de Bellas Artes de Santurce, San Juan, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                  2006
                                </p>
                                <p class="tablaContenido">
                                    “Capilla al Cristo Caído” Universidad Central de Bayamón, Bayamón, Puerto Rico.
                                    <br>
                                    “The Fallen Christ Chapel” Universidad Central de Bayamón. Bayamón, Puerto Rico.
                                    
                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2003
                                </p>
                                <p class="tablaContenido">
                                    “Constelaciones” Conjunto de Vitrales para el Complejo Gubernamental Municipio Autónomo de Guaynabo. Guaynabo, Puerto Rico. (“Constellations”, A Collection of Stained-Glass Windows for the Autonomous Municipality of Guaynabo, Guaynabo, Puerto Rico)
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   2001
                                </p>
                                <p class="tablaContenido">
                                    “ElMundodelTeatro”. TeatroBraulioCastillo. Municipio de Bayamón. Bayamón, Puerto Rico. (“The World of Theatre”, Braulio Castillo Theatre, Municipality of Bayamon, Puerto Rico).
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2000
                                </p>
                                <p class="tablaContenido">
                                    “Molinos de San Juan”). Municipio de San Juan. Ocean Park, Santurce, Puerto Rico. (“Windmills of San Juan”, Ocean Park, Santurce, Municipality of San Juan, Puerto Rico).
                                    <br><br>
                                    “Sol Naciente Taíno”.) Fachada del Museo de Arte de Puerto Rico. San Juan, Puerto Rico. (“Taino Rising Sun”, Façade of the Museo de Arte de Puerto Rico, San Juan, Puerto Rico).
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1996
                                </p>
                                <p class="tablaContenido">
                                    “EspacioReflexivo”. UniversidaddelSagradoCorazón. (“Reflexive Space”, University of Sacred Heart).
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1995
                                </p>
                                <p class="tablaContenido">
                                    “CapilladeMeditaciónJuanAcha”. EscuelaNacional de Ciudad México. Artes Plásticas, Universidad Nacional Autóma de México. (“Juan Acha Chapel of Meditation”, National School of Plastic Arts, Autonomous National University of Mexico).
                                </p>
                            </td>
                        </tr>
                        
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1994
                                </p>
                                <p class="tablaContenido">
                                    El Vidrio. Colección Compañía de Turismo de Puerto Rico. San Juan, Puerto Rico (“The Glass”, Collection of The Tourism Company of Puerto Rico, San Juan, Puerto Rico).
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">COLLECTIVE EXHIBITS:</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   2023
                                </p>
                                <p class="tablaContenido">
                                    “20”. Jean Michel Fiedler y Eric Tabales, Galería SPACE, Guaynabo, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2022
                                </p>
                                <p class="tablaContenido">
                                    Colegas. Galería SPACE, Guaynabo, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2021
                                </p>
                                <p class="tablaContenido">
                                    4. Biennale D’Arte Contemporanea di Salerno, Italy.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2019
                                </p>
                                <p class="tablaContenido">
                                    “Vida”. Galería SPACE, Guaynabo, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   2016
                                </p>
                                <p class="tablaContenido">
                                    Portrait, Jean Michel Fiedler y Eric Tabales. Galertía SPACE, San Patricio Plaza, Guaynabo, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2015
                                </p>
                                <p class="tablaContenido">
                                    Del Magma. Susana Herrero y Eric Tabales. Galería SPACE, San Patricio Plaza, Guaynabo, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                  2011
                                </p>
                                <p class="tablaContenido">
                                    Tradición y Controversia, Dos Artistas, Dos Tesoros. Museo de Las Américas, Cuartel de Ballajá, San Juan, P.R.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                  2008
                                </p>
                                <p class="tablaContenido">
                                    “Gemas”. Torre Santander, San Patricio Plaza, Guaynabo, Puerto Rico.
                                    <br>
                                    “Gems”. Santander Tower, San Patricio Plaza, Guaynabo, Puerto Rico.                                    
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2007
                                </p>
                                <p class="tablaContenido">
                                    Exposición “El Caballo en la Cultura Puertorriqueña. Museo de Las Américas, Ballajá, San Juan, Puerto Rico.
                                    <br>
                                    <br>
                                    “The Horse in the Culture of Puerto Rico”. Museo de Las Américas. Cuartel de Ballajá. San Juan, Puerto Rico.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   2005
                                </p>
                                <p class="tablaContenido">
                                    Exposición Héctor Lavoe. Museo de Las Américas. Cuartel de Ballajá. San Juan, Puerto Rico.
                                    <br>
                                    (Héctor Lavoe Exhibition. Museo de Las Américas. Cuartel de Ballajá.San Juan. Puerto Rico.)
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2001
                                </p>
                                <p class="tablaContenido">
                                    Trienal del Grabado. Kanagawa, Yokohama, Japón (Triennial of Engraving, Kanagawa, Yokohama, Japan ).
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2000
                                </p>
                                <p class="tablaContenido">
                                    12th.BienalFrechen,Alemania.(12th.FrechenBiennal, Germany).

                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1998
                                </p>
                                <p class="tablaContenido">
                                    “The 1st. Art Addiction Annual in Venice Palazzo Correr, Venezia, Italy.
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    
                                </p>
                                <p class="tablaContenido">
                                    Colectiva, “El Vidrio”, Galería Diseño Isleño, San Jorge, Santurce, Puerto Rico. (A Collective, “The Glass”, Diseño Isleño Gallery, San Jorge Street, Santurce, Puerto Rico.
                                    <br><br>
                                    “Segona Mostra International de Minigravats Mig-98”. La Regidoria de Cultura del Ajuntament de Terrassa. Barcelona, España. (Second International Exhibition of Mini Engravings, Mig-98, Ministry of Culture of the City Hall of Terrasa, Barcelona, Spain).
                                    <br><br>
                                    Subasta de Arte Puertorriqueño, Sotheby’s. Hotel Ritz Carlton, San Juan, Puerto Rico. (Sotheby’s Auction of Puerto Rican Art, Ritz Carlton Hotel, San Juan, Puerto Rico).
                                    
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   1997
                                </p>
                                <p class="tablaContenido">
                                    “The First International Mini-Print Biennal Cluj”. Gallery of the Union of Fine Artists, Cluj, Romania.
                                    2nd. Malaysia Annual Exhibiton of International Contemporary Prints, Central Art Gallery. Kuala Lumpur, Malaysia.
                                    <br><br>
                                    “Cloe”, Galería Botello, Ave. Roosevelt,. San Juan, Puerto Rico.
                                    <br><br>
                                    Colectiva de Profesores Museo de Historia, Antropología y Arte. Facultad de Humanidades, Departamento de Bellas Artes. Universidad de Puerto Rico, Recinto de Río Piedras. (“Professors’ Collective”, Museum of History, Anthropology, and Art; Humanities College, University of Puerto Rico, Rio Piedras Campus.
                                    <br><br>
                                    “El Cordón”. Galería Botello. (“The Thread”, Botello Gallery) “Innocence”, Galería Botello.
                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1996
                                </p>
                                <p class="tablaContenido">
                                    Proyecto Maletas. Museo de Arte Contemporáneo de Puerto Rico. San Juan, Puerto Rico. (“Suitcases Project”. Museum of Contemporary Art of Puerto Rico, San Juan, Puerto Rico).
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1995
                                </p>
                                <p class="tablaContenido">
                                    Artistas Unidos Contra el SIDA. Museo Universitario del Chopo. Ciudad México. México, DF. (“United Artists against AIDS”. University Museum of Chopo, Mexico City, Mexico).
                                    <br><br>
                                    Exposición Gráfica Pequeño Formato. Tokio, Japón. (“Engraving Exhibition, Small Format”, Tokio, Japan.                              
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1994
                                </p>
                                <p class="tablaContenido">
                                    Exposición de Arte Joven. Chase Manhattan Bank. PRIMER PREMIO PINTURA, San Juan, Puerto Rico. (“Exhibition of Young Artists”. Chase Manhattan Bank. First Price: Painting. San Juan, Puerto Rico.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1993
                                </p>
                                <p class="tablaContenido">
                                    Primera Trienal Internacional de Grabado, (Invitado honorario). ElCairo,Gysch,Egipto.(“FirstInternacional Triennual of Engraving” [Honorary Visiting Artist] El Cairo, Gysch, Egypt).
                                    <br><br>
                                    Exposición de Graduandos. Galería Francisco Oller, Facultad de Humanidades. Universidad de Puerto Rico, Recinto de Río Piedras. (“Degree Candidates Exhibition”, Francisco Oller Gallery, Humanities College, University of Puerto Rico, Rio Piedras Campus).
                                </p>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1992
                                </p>
                                <p class="tablaContenido">
                                    Exposición de Arte Internacional Independiente. Kanagawa, Yokohama, Japón. (“Independent International Art Exhibition”, Kanagawa, Yokohama, Japan).
                                    <br><br>
                                    Exposición Internacional de Arte. Ministerio de Noumea, Nueva Caledonie. (“International Art Exhibition”, Ministry of Noumea, New Caledony).
                                    <br><br>
                                    2da. Exposición Anual Internacional del Grabado de Formato Pequeño. Galería Juniper, Napa, California. (“2ND. International Annual Exhibition of Engraving, Small Format”, Juniper Gallery, Napa, California)
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   1991
                                </p>
                                <p class="tablaContenido">
                                    Exposición de Arte Colectivo. Galería Francisco Oller. (“Collective Art Exhibition”, Francisco Oller Gallery).
                                    <br><br>
                                    Exposición y Subasta de Arte Museo de la Universidad de Puerto Rico, Recinto de Río Piedras. (“Exhibition and Auction of Art”, University of Puerto Rico Museum, Rio Piedras Campus).
                                    
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1989
                                </p>
                                <p class="tablaContenido">
                                    Colectiva Libre. Botello Gallery. San Juan, Puerto Rico.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">AWARDS:</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2005
                                </p>
                                <p class="tablaContenido">
                                    Mejor Exhibición Individual del Año. “Santos”. Asociación de Críticos de Arte de Puerto Rico (AICA). (Individual Exhibition of the Year. “Saints”. Art Critics Association of Puerto Rico).
                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>
    
    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    
                                </p>
                                <p class="tablaContenido">
                                    Diseño de Catálogo. “Santos”. Asociación de Críticos de Arte de Puerto Rico (AICA). (Best Catalogue Design. “Saints”. Art Critics Association of Puerto Rico.)
                                    
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   1999
                                </p>
                                <p class="tablaContenido">
                                    Premio Mejor Exposición Medio del 1998. Asociación de Críticos de Arte de Puerto Rico. (AICA). (Best Exhibition 1998, Art Critics Association of Puerto Rico).
                                    <br><br>
                                    Certificado de Mérito. Premio en el extranjero. Venecia. Asociación de Críticos de Arte de Puerto Rico. (Certificate of Merit, Foreign Exhibition [Venice, Italy] Art Critics Association of Puerto Rico).

                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   1998
                                </p>
                                <p class="tablaContenido">
                                    Certificado de Mérito. (Certificate of Merit) “1st. Art Addiction Annual in Venice”, Masks in Venice. Palazzo Correr Cannaregio 2214, Venezia.
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   1997
                                </p>
                                <p class="tablaContenido">
                                    Premio Monumento Privado. Espacio Reflexico. Universidad del Sagrado Corazón. Asociación Puertorriqueña de Críticos de Arte.
                                    <br><br>
                                    (Private Monumental Award, “Reflexive Space”, University of Sacred Heart, Puerto Rican Association of Art Critics).
                                    
                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    1996
                                </p>
                                <p class="tablaContenido">
                                    Premio Monumento Público. Capilla de Meditación JuanAcha,CiudadMéxico. AsociaciónPuertorriqueña de Críticos de Arte. (Public Monument Award, “Juan Acha Chapel of Meditation”, Puerto Rican Association of Art Critics).
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                 1994
                                </p>
                                <p class="tablaContenido">
                                    Primer Premio Pintura. Arte Joven. Chase Manhattan Bank, San Juan, Puerto Rico. (First Place, Painting. Young Art. Chase Manhattan Bank, San Juan, Puerto Rico).
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   1992
                                </p>
                                <p class="tablaContenido">
                                    Invitado honorario. Primera Trienal Internacional del Grabado. El Cairo, Egipto. (Honorary Visiting Artist, First International Triennial of Engraving. El Cairo, Egypt).
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">THEATER:</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   2000
                                </p>
                                <p class="tablaContenido">
                                    TENGAMOS SEXO EN PAZ. Escenografía por Eric Tabales. Centro de Bellas Artes. Santurce, Puerto Rico. (“Let’s Have Sex in Peace”, Eric Tabales, Set Designer. Fine Arts Center, Santurce, Puerto Rico).
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">COLLECTORS:</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   
                                </p>
                                <p class="tablaContenido">
                                    CentrodeConvencionesdeCaboRojo(Generaciones, 20’ x 10’, 2012).
                                    <br><br>
                                    Centro de Bellas Artes de Santurce ( El Otello de Paoli, 10’ x 30’, 2011).
                                    <br><br>
                                    Instituto de Cultura Puertorriqueña (“Zeus” 60” x 48”, oxide canvas, 2005).

                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   
                                </p>
                                <p class="tablaContenido">
                                    Museo de Arte de Puerto Rico (“Inmersion del Alma” 72” x 48”, oxide canvas, 1998).
                                    <br><br>
                                    Museo de Arte Contemporaneo (“Francisco de Asis”, 48” x 60”, oxide canvas, 2006).
                                    <br><br>
                                    Cooperativa de Seguros Multiples (“Mar Antartico” 86” x 48” mix media,2007).
                                    <br><br>
                                    Cooperativa COSVI ( “Atlantico”, 84” x 108”, mix media, 2007).
                                    <br><br>
                                    Universidad Central de Bayamon ( Many pieces).
                                    <br><br>
                                    Academia San Carlos –UNAM, Mexico City, ( Many pieces).
                                    <br><br>
                                    Doral Bank, (“Hermes” 60” x 48”, oxide canvas, 2005).
                                    <br><br>
                                    Ballester Hermanos (“Bodegon I y II”, 36” x 48”, mix media, 2009).
                                    <br><br>
                                    Universidad del Sagrado Corazon ( Many pieces).
                                    <br><br>
                                    Ministerio de Noumea, Nueva Caledonie. (“Artemisa” 32” x 40” mix media, 2002, Ministry of Noumea, New Caledony).
                                    <br><br>
                                    Museo del Grabado del Cairo ( “ Vice-versa”, poliptic-8 pieces, lithography, 1993).
                                    <br><br>
                                    Compañía de Turismo de Puerto Rico. San Juan, Puerto Rico (“The Glass”,1994, Collection of The Tourism Company of Puerto Rico, San Juan, Puerto Rico).
                                    <br><br>
                                    Mr. Luis A. Ferre
                                    
                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   
                                </p>
                                <p class="tablaContenido">
                                    Mr. Roberto Gonzáles Vizcarrondo 
                                    <br><br>
                                    Eng. Chilo Andrew
                                    <br><br>
                                    Mrs. Zoila Levis
                                    <br><br>
                                    Ballester Alonso Fam. 
                                    <br><br>
                                    Arch. Otto Reyes 
                                    <br><br>
                                    Gladys Alonso
                                    <br><br>
                                    Arturo González 
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">PUBLICATIONS:</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   
                                </p>
                                <p class="tablaContenido">
                                    Tabales saborea la vida de sus “Santos”. Periódico El Nuevo Día, noviembre 2005.
                                    Eric Tabales y sus “Santos” en Obra. Periódico El Nuevo Día, octubre 2005.
                                    <br><br>
                                    Santos, vírgenes y mártires. Periódico El Vocero, Escenario, octubre 2005.
                                    <br><br>
                                    Tesoros de Arte de ICP al convento de los Dominicos. Periódico El Vocero, Escenario, octubre 2004.
                                    <br><br>
                                    Eric Tabales en la morada de Mitos y dioses. Periódico El Vocero, Escenario, abril 2004.
                                    <br><br>
                                    Gos and us: All Greek to him. Periódico The San Juan Stars, abril 2004.
                                    <br><br>
                                    Mitos y dioses en Ballajá. El Nuevo Día, abril 2004.
                                    
                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   
                                </p>
                                <p class="tablaContenido">
                                    Mr. Roberto Gonzáles Vizcarrondo 
                                    <br><br>
                                    Eng. Chilo Andrew
                                    <br><br>
                                    Mrs. Zoila Levis
                                    <br><br>
                                    Ballester Alonso Fam. 
                                    <br><br>
                                    Arch. Otto Reyes 
                                    <br><br>
                                    Gladys Alonso
                                    <br><br>
                                    Arturo González 
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">PUBLICATIONS:</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   
                                </p>
                                <p class="tablaContenido">
                                    Tabales saborea la vida de sus “Santos”. Periódico El Nuevo Día, noviembre 2005.
                                    Eric Tabales y sus “Santos” en Obra. Periódico El Nuevo Día, octubre 2005.
                                    <br><br>
                                    Santos, vírgenes y mártires. Periódico El Vocero, Escenario, octubre 2005.
                                    <br><br>
                                    Tesoros de Arte de ICP al convento de los Dominicos. Periódico El Vocero, Escenario, octubre 2004.
                                    <br><br>
                                    Eric Tabales en la morada de Mitos y dioses. Periódico El Vocero, Escenario, abril 2004.
                                    <br><br>
                                    Gos and us: All Greek to him. Periódico The San Juan Stars, abril 2004.
                                    <br><br>
                                    Mitos y dioses en Ballajá. El Nuevo Día, abril 2004.
                                    
                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   
                                </p>
                                <p class="tablaContenido">
                             
                                    Mitos y dioses de factura humana. El Nuevo Día, marzo 2004.
                                    <br><br>                                                                    
                                    Entre lo humano y lo divino. Periódico El Nuevo Día, noviembre 2003.
                                    <br><br>
                                    Tomás, Tabales y el Padre. Periódico El Nuevo Día, noviembre 2003.
                                    <br><br>
                                    La sensibilidad mágica en Eric Tabales. Periódico El Vocero, octubre 2001.
                                    <br><br>
                                    Arte Teatral. Por Dentro. Periódico El Nuevo Día, octubre 2000.
                                    <br><br>
                                    Tabales bestial. Por Dentro. Periódico El Nuevo Día, septiembre 2000.
                                    <br><br>
                                    De amarillo y negro. Revista Magazín. Periódico El Nuevo Día, julio 2000.
                                    <br><br>
                                    Portal del Arte. Revista Domingo. Periódico El Nuevo Día, julio 2000.
                                    <br><br>
                                    Museo de Arte de Puerto Rico... un reto para la arquitectura moderna. Escenario, julio 2000.
                                    <br><br>
                                    Espacios para meditar. Escenario, junio 2000.
                                    <br><br>
                                    Refugio tropical de los Reyes. Revista Magazín. Periódico El Nuevo Día, abril 2000.
                                    <br><br>
                                    Sol naciente taíno... en obra de Eric Tabales. Escenario, marzo 2000.
                                    <br><br>
                                    Eric Tabales y El Mueble Puertorriqueño. Periódico Primera Hora, abril 1999.

                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   
                                </p>
                                <p class="tablaContenido">
                                    Mueble, Nuevo Concepto. Periódico Primera Hora, febrero 1999.
                                    <br><br>
                                    Angela Meyer muestra el sexo con humor. Periódico Primera Hora, febrero 1999.
                                    <br><br>
                                    Gala is a triumph for Museo de P.R. The San Juan Star, mayo 1998.
                                    <br><br>
                                    “El misticismo carnal del artista Eric Tabales”. El Star, abril 1998.
                                    <br><br>
                                    “De Viaje”en el arte en el MAC. Periódico El Nuevo Día, abril 1997.
                                    <br><br>
                                    Espacio Reflexivo. Revista Vanidades-Miami, Florida, abril 1997.
                                    <br><br>
                                    “In to the Mystique”. Periódico The San Juan Star, marzo 1997.
                                    <br><br>
                                    Pródigo el quehacer de nuestros artistas plásticos. Periódico El Nuevo Día, enero 1997.
                                    <br><br>
                                    Espacio para la reflexión en el Sagrado. Periódico El Nuevo Día., diciembre 1996.
                                    <br><br>
                                    “Mystery, poetry light artits’ works”. Periódico The San Juan Star, septiembre 1996.
                                    <br><br>
                                    La AICA reconoce lo mejor de 1995.	Periódico El Nuevo Día, mayo 1996.
                                    <br><br>
                                    Nuestros artistas de hoy: un signo y una promesa. Periódico El Nuevo Día, marzo 1996.
                                    <br><br>
                                    Sugestiva la Obra de Eric Tabales. Periódico El Nuevo Día, marzo 1996.
                                    
                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   
                                </p>
                                <p class="tablaContenido">
                                   Oxidos. Periódico el Nuevo Día. Revista Domingo, febrero 1996.
                                    <br><br>
                                    Continua “Oxidos” en la USC. Periódico El Vocero, febrero 1996.
                                    <br><br>
                                    “Learning to understand nature”.
                                    Periódico The San Juan Star, enero 1996.
                                    <br><br>
                                    Signos del Tiempo. Periódico El Nuevo Día, enero 1996.
                                    <br><br>
                                    Eric Tabales-Primer Puertorriqueño con obra permanente en México. Revista Caras de Puerto Rico, enero 1996.
                                    <br><br>
                                    Capilla de Meditación Juan Acha: Influencia de las Basílicas Grecorromanas. Revista: Gaceta Unam, Sección Agenda, noviembre 1995.
                                    <br><br>
                                    Para Juan Acha, la Capilla del Escultor Eric Tabales.
                                    Periódico La Jornada. México, noviembre 1995.
                                    <br><br>
                                    Gráficas de la Capilla Juan Acha. Periódico Uno Más Uno. México, noviembre 1995.
                                    <br><br>
                                    Eric Tabales diseña capilla en México. Periódico El Nuevo Día, agosto 1995.
                                    <br><br>
                                    “ Tabales Converts metal, glass into art.” Periódico The San Juan Star, agosto 1995.
                                    <br><br>
                                    Arte Joven en el Chase. Periódico El Nuevo Día, octubre 1993.
                                    <br><br>
                                    “Biennal of Young Art a showcase for new talent”. Periódico The San Juan Star, septiembre 1993.

                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                   
                                </p>
                                <p class="tablaContenido">
                                    “Young artist show”. Periódico The San Juan Star, septiembre 1993.
                                    <br><br>
                                    El Chase revela sus selecciones.
                                    Periódico El Nuevo Día,  agosto 1993.
                                    
                                </p>
                            </td>
                        </tr>
       
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

    <swiper-slide>
        <div class="row">
            <div class="col-12">
                <div class="barra barra3"></div>
                <img src="{{asset('public/img/home.png')}}" class="homeIcon" alt="home" id="homeIcon">
            </div>
            <div class="col-12 tituloCurri">
                <div class="container">
                    <p>Curriculum</p>
                    <p style="color: #6b1a9a">Vitae</p>
                    <div class="nameCurri">
                        <p>José Manuel Correa-Vigier</p>
                    </div>
                </div>
            </div>
            <div class="col-12 lista listaContainer">
                <div class="container">
                    <table class="tabCurri">
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">EDUCATION:</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2" style="font-weight: normal">ACADEMIC DEGREES:</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="tablaTitulo">
                                <p>a) &nbsp;</p>
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    MFA (M.A. in Visual Arts, Painting). Academia de
                                    San Carlos, Escuela Nacional de Artes Plásticas,
                                    Universidad Nacional Autónoma de México. 1995.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="tablaTitulo">
                                <p>b) &nbsp;</p>
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    B.A in Visual Arts, Major in Painting, University of
                                    Puerto Rico, Río Piedras Campus. 1993.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="tablaTitulo">
                                <p>c) &nbsp;</p>
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    Post B.A. in Medical Technology. University of Puerto
                                    Rico. Escuela de Medicina de San Juan, Puerto Rico.
                                    1988.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="tablaTitulo">
                                <p>d) &nbsp;</p>
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    B.A in Natural Sciences, Major in Chemistry and
                                    Biology. University of Puerto Rico, Río Piedras
                                    Campus. 1985.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">TEACHING EXPERIENCE:</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tabSubtitulo">
                                    2005 – Present
                                </p>
                                <p class="tablaContenido">
                                    Resident Artist. Universidad Central de Bayamón.
                                    Bayamón, Puerto Rico.
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            
        </div>
    </swiper-slide>

  </swiper-container>


  {{-- <div slot="container-end">Rendered after wrapper</div> --}}
  <div class="modal" id="myModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <video controls id="videoMod">
                <source src="{{asset('public/video/hectortroya.mp4')}}" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>
        </div>

      </div>
    </div>
  </div>
  @endsection
@section('js')
    <script src="{{asset('public/js/home/introduccion.js')}}"></script> 
@endsection
