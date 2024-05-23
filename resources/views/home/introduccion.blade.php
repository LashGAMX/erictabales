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
                <p>OBRAS</p>
            </div>
            <div class="col-12 menus" id="menu6">
                <p>ALIADOS</p>
            </div>
            <div class="col-12 menus" id="menu7">
                <p>PROPUESTA DE PROGRAMA PÚBLICO</p>
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
                                <p class="tituloLista2">EMPLEO / EMPLOYMENT</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>Present - 2011</strong><br>
                                    Curador / Historiador / Cineasta Independiente
                                    Independent Art curator / Historian / Filmmaker.
                                    <br><br>
                                    <strong>2011</strong><br>
                                    Columbia University, NYC Gallery at The Center
                                    CSER,Center for the Study of Ethnicity and Race.
                                    Associate Curator / Essayist, New York City,
                                    E.E.U.U.
                                    <br><br>
                                    <strong>2011 - 1999</strong><br>
                                    De Museo GALERÍA DE ARTE Co- director, Co-
                                    fundador. San Juan, Puerto Rico.
                                    <br><br>
                                    <strong>1999 - 1997</strong><br>
                                    Museo de Historia, Antropología y Arte
                                    Universidad de Puerto Rico Recinto de Río
                                    Piedras, Río Piedras, Puerto Rico. Estudio y
                                    Trabajo / Work & Study.
                                    <br><br>
                                    <strong>1990 - 1989</strong><br>
                                    Museo de Arte Contemporáneo de Puerto Rico
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    San Juan, Puerto Rico. Trabajo voluntario /
                                    Voluntary Work.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">EDUCACIÓN / EDUCATION</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>2021,</strong> Doctorado en Historia Cultural
                                    Cultural History Doctorate
                                    Universidad De Puerto Rico, Recinto de Río Piedras
                                    Expected in 2025
                                    <br><br>
                                    <strong>2018,</strong> Maestría en Gestión y Administración
                                    Cultural
                                    Masters in Culture Agency and Administration
                                    Universidad de Puerto Rico, Recinto de Río Piedras
                                    Río Piedras, Puerto Rico 
                                    <br><br>
                                    <strong>2007,</strong> Bachiller en Humanidades, BA
                                    Concentración en Historia del Arte / Art History
                                    Universidad de Puerto Rico Recinto de Río Piedras
                                    Río Piedras, Puerto Rico
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">TALLERES Y SEMINARIOS / WORKSHOPS AND SEMINARS</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>2022</strong><br>
                                    <strong>Caribbean University, Museo de Arte
                                        (MACU). Arte del Caribe Contemporáneo,
                                        Transculturación, Diáspora y Arte Público.</strong>
                                    Seminario con la Dra. Yolanda Wood.
                                    <strong>2016</strong><br>
                                    <strong>Universitat de Barcelona, Red IBERTUR,
                                        LABPATC</strong> - Laboratorio de Patrimonio, Creatividad
                                    y Turismo Cultural / LABPATC, Laboratory of
                                    Heritage, Creativity and Cultural Tourism, University
                                    of Barcelona and IBERTUR.
                                    <br><br>
                                    <strong>2014</strong><br>
                                    <strong>Academia de Profesionales de Museos para el Siglo XXI</strong>
                                    IMLS, Universidad Del Turabo, Smithsonian Affiliate
                                    Program. Curatorial intensive program.
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>2000 - 1997</strong><br>
                                    <strong>Restauración y Conservación / Restoration and
                                        art conservation</strong><br>
                                    Santiago Espinal
                                    San Juan, Puerto Rico
                                    <br><br>
                                    <strong>1992</strong><br>
                                    <strong>Proceso de Ejecución de la Colografía /
                                        Collograph execution process</strong><br>
                                    Profa. Myrna Báez Universidad del Sagrado
                                    Corazón
                                    San Juan, Puerto Rico
                                    <br><br>
                                    <strong>1991</strong><br>
                                    <strong>Proceso Reproducción Xilográfica / Introduction
                                        to woodcut printing</strong><br>
                                    Prof. Carlos Raquel Rivera Taller del Artista
                                    Río Piedras, Puerto Rico
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">CONFERENCIAS,SEMINARIOS,SIMPOSIOS /
                                    CONFERENCES, SEMINARS, SYMPOSIA</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>2023</strong><br>
                                <strong>    Presentación del catálogo oficial, Muestra
                                    Legado. Panelista invitado.</strong><br>
                                    Instituto de Cultura Puertorriqueña (ICP), San Juan,
                                    Puerto Rico. 8 de febrero de 2023
                                    <br><br>
                                    <strong>2019</strong><br>
                                    <strong>Arte Coloquios AICA</strong>
                                    Organizador y Ponente / Organizer and Speaker
                                    Caribbean University, Bayamon, Puerto Rico
                                    16 de febrero de 2019
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>2017</strong><br>
                                    <strong>Granell en la UPR</strong><br>
                                    Conferenciante Invitado/ Guest Speaker.
                                    Departamento de Historia del arte UPRRP 19 de
                                    junio de 2017
                                    <br><br>
                                    <strong>2016</strong><br>
                                    <strong>El Mirador Azul y Eugenio Granell.</strong><br>
                                    Conferencia / Conference
                                    Escuela de Artes Plásticas, San Juan, Puerto Rico
                                    14 marzo de 2016.
                                    <br><br>
                                    <strong>2015</strong><br>
                                    <strong>Cossette Zeno, Antología 1951-2014 /
                                        Retrospective exhibition</strong><br>
                                    Museo de Arte de Caguas, P.R Conferencia y visita
                                    guiada,/ Conference and guided visit.
                                    5 de septiembre de 2015
                                    <br><br>
                                    <strong>2014</strong>
                                    <strong>Camino al Mirador Azul,</strong> Conferencia y visita
                                    guiada, / Conference and guided visit. Galería de
                                    arte USC. 3 de marzo de 2014
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">ESCRITOS / CRITICAL ESSAYS</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                   <strong> Autor en Visión Doble/ Author at Vision Doble
                                    Art Journal,</strong> University art review magazine,UPRRP,
                                    2015-2023.
                                    <br><br>
                                    <strong>El mirador azul.</strong> José Manuel Correa Vigier, 2007.
                                    Tesina presentada como requisito para obtener
                                    el Grado de Bachiller en Humanidades con
                                    concentración en Historia del Arte. Universidad
                                    de Puerto Rico. UPRRP
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
                                <p class="tituloLista2">PUBLICACIONES / PUBLISHED WORKS</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>Antonio Martorell: Iconografías,</strong> Exposición
                                    Antonio Martorell 2022, Exposition catalog. Space
                                    Gallery, PR
                                    <br><br>
                                    “The Exiles of E. F. Granell,” in <strong>Surrealism Beyond
                                        Borders,</strong> exh. cat., ed. Stephanie D’Alessandro and
                                    Matthew Gale. New York:
                                    Metropolitan Museum of Art and Tate Modern, 2021
                                    <br><br>
                                    <strong>La Letra,</strong> Exposición Lorenzo Homar, 2020,
                                    Exposition catalog. Space Gallery, PR
                                    <br><br>
                                    <strong>Mitos y Dioses,</strong> Exposición Eric Tabales, 2018,
                                    Exposition catalog. Museo de las Américas, PR
                                    <br><br>
                                    <strong>El origen de la imagen,</strong> Exposición Lorenzo Homar,
                                    2018, Exposition catalog. Space Gallery, PR
                                    <br><br>
                                    <strong>Cossette Zeno, Antología,</strong> Exposición Cossette
                                    Zeno, 2015, Exposition catalog. MUAC, PR
                                    <br><br>
                                    <strong>El canon oliveriano, Prisma,</strong> Exposición José R.
                                    Oliver, 2015. Exposition catalog, Museo de arte de
                                    Arecibo
                                    <br><br>
                                    <strong>Camino al Mirador Azul,</strong> Exposition Catalog, 2014.
                                    Galería de arte USC.
                                    <br><br>
                                    <strong>Linda Sánchez Pintor, Esculturas,</strong> Exposition
                                    catalog, 2013. De Museo Galería de Arte, San Juan,
                                    P.R. <br><br>
                                    <strong>Dulce Pinzón, Super Heroes,</strong> Exposition catalog,
                                    2012. Critical essay. Columbia University. NYC
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>El trazo mítico.</strong> Exposition catalog, 2011. Critical
                                    essay. Museo Francisco Oller. Bayamón, Puerto
                                    Rico.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2"><u>PREMIOS Y RECONOCIMIENTOS /
                                    AWARDS & RECOGNITIONS</u></p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="tituloLista2">PUERTO RICAN ART RESEARCH FELLOW,
                                    ANDREW MELLON FOUNDATION, MUSEO DE
                                    ARTE DE PONCE</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>2023</strong><br>
                                    Ganador de la convocatoria, Puerto Rican Arte
                                    Research Fellow
                                    Museo de Arte de Ponce, Ponce Puerto Rico.
                                    <br><br>
                                    <strong>BECA PBMA</strong><br>
                                    <strong>2022</strong><br>
                                    Beca por Mérito Académico y Ejecutorias
                                    Excepcionales Equivalentes. Decanato Graduado
                                    de Investigación (DEGI). Universidad de Puerto
                                    Rico, Recinto de Río Piedras. UPRRP.
                                    <br><br>
                                    <strong>PRESIDENT, AICA, P.R CHAPTER</strong><br>
                                    <strong>2021</strong><br>
                                    AICA PR. San Juan. Puerto Rico.
                                    <br><br>
                                    <strong>SEGUNDA BIENAL, ASOCIACIÓN DE ARTISTAS
                                        PLÁSTICOS DE PUERTO RICO</strong><br>
                                    Juez invitado / Invited Judge. Museo Casa Escuté
                                    <br>
                                    <strong>2019</strong><br><br>
                                    <strong>POST GRADUATE TRAVEL INVESTIGATION
                                        GRANT</strong><br>
                                    Decanato graduado de investigación, Universidad
                                    de Puerto Rico, Rio Piedras <br>
                                    <strong>2017</strong>
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>MIEMBRO AICA OFFICIAL MEMBER AFFILIATE,
                                        P.R CHAPTER</strong><br>
                                    <strong>2017</strong><br>
                                    AICA PR. San Juan. Puerto Rico.
                                    <br><br>
                                    <strong>EUGENIO GRANELL FOUNDATION OFFICIAL
                                        ENDORSEMENT FOR EXHIBITION PROJECT 2015</strong><br>
                                    Cossette Zeno, Antología. Museo de arte de
                                    Caguas,P.R.
                                    <br>
                                    Endoso oficial fundación Eugenio Fernández Granell
                                    <br><br>
                                    <strong>BEST GALLERY EXHIBITION NOMINATION,
                                        CAMINO AL MIRADOR AZUL, AICA 2015</strong><br><br>
                                    USC art gallery/ Galeria de arte, Universidad del
                                    Sagrado Corazón <br>
                                    Asociación de Críticos de Arte, AICA, February 15,
                                    2015 <br>
                                    Capítulo de Puerto Rico. San Juan, Puerto Rico
                                    <br>
                                    <strong>XXVIII BAQUINOQUIO, ANNUAL REMEMBRANCE
                                        IN HONOR OF ROBERTO ALBERTY 2014</strong><br>
                                    Municipio de Carolina, programa de Bellas Artes /
                                    Carolina municipal arts program
                                    <br>
                                    September 20, 2014 <br>
                                    Ensayista/Historiador invitado. Invited Writer /
                                    Historian
                                    <br><br>
                                    <strong>DOCNYC, THE NEEDLE, OFFICIAL SELECTION
                                        PREMIERE PROGRAM 2012, IFC Theater, NYC.</strong><br>
                                    <strong>2012</strong>
                                    Director / producer
                                    <br><br>
                                    <strong>ROCKEFELLER BROTHERS FUND</strong><br>
                                    <strong>2011</strong><br>
                                    Finishing funds program for The Needle/
                                    Documentary project. <br>
                                    Director/producer
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>RAUL JULIA CINEMA GRANT</strong><br>
                                    <strong>2010</strong><br>
                                    Corporación de Cine de Puerto Rico,Developing
                                    Funds for The Needle, Documentary.
                                    Director/producer
                                    <br><br>
                                    <strong>PREMIO EXHIBICIÓN DEL AÑO EN GALERÍA
                                    COMERCIAL/ EXHIBITION OF THE YEAR, AICA</strong><br>
                                    <strong>Félix Bonilla Norat</strong><br>
                                    <strong>Maestro del color y movimiento</strong><br>
                                    <strong>2003</strong><br>
                                    Asociación de Críticos de Arte, AICA ,abril 16, 2004. <br>
                                    Capítulo de Puerto Rico, San Juan, Puerto Rico
                                    <br><br>
                                    <strong>PREMIO EXHIBICIÓN DEL AÑO EN GALERÍA
                                    COMERCIAL/EXHIBITION OF THE YEAR, AICA</strong><br>
                                    <strong>Carlos Marcial</strong><br>
                                    <strong>Parajes Olvidados</strong><br>
                                    <strong>2002</strong><br>
                                    Asociación de Críticos de Arte, AICA, Marzo, 12,
                                    2003 <br>
                                    Capítulo de Puerto Rico. San Juan, Puerto Rico
                                    <br><br>
                                    <strong>PREMIO EXPOSICIÓN GALERÍA COMERCIAL/
                                        EXHIBITION OF THE YEAR, AICA Félix Bonilla</strong>
                                    <strong>Norat</strong><br>
                                    <strong>Su espacio interior</strong><br>
                                    <strong>2001</strong><br>
                                    Asociación de Críticos de Arte, AICA.Capítulo de
                                    Puerto Rico. San Juan, Puerto Rico
                                    <br><br>
                                   <strong> NOMINACIÓN EXPOSICIÓN HISTÓRICA/
                                    HISTORICAL EXPOSITION NOMINATION Félix
                                    Bonilla Norat</strong><br>
                                    Su espacio interior 2001 Asociación de Críticos
                                    de Arte, AICA Capítulo de Puerto Rico San Juan,
                                    Puerto Rico
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>Asesor y Colaborador Exposición,El mundo de
                                        la ingenuidad/ Collaborator & Advisor Muestra
                                        Internacional de Arte Naif</strong> <br>
                                    Museo de Arte de Puerto Rico. San Juan, Puerto
                                    Rico
                                    <strong>2001</strong> <br> <br>
                                    <strong>CURADURÍA Y MONTAJES / CURATORSHIP &
                                        EXHIBITIONS (Selection)</strong> <br><br>

                                    <strong>Detrás del Sol: Granell en Puerto Rico</strong><br>
                                    Fundación Eugenio Granell, Santiago de
                                    Compostela, España. <br>
                                    <strong>2023</strong> <br><br>
                                    <strong>Antono Martorell; Iconografías</strong> <br>
                                    Space Gallery, San Patricio Art Center, San Juan, <br>
                                    P.R. <br>
                                    <strong>2022</strong> <br> <br>
                                    <strong>Surrealism Beyond Borders</strong> <br>
                                    Metropolitan Museum of Art & Tate Modern
                                    New York City - London, England
                                    Associate curator / Essayist
                                    <strong>2021 - 2022</strong> <br> <br>
                                    <strong>La Letra, Lorenzo Homar</strong> <br>
                                    Space Gallery, San Patricio Art Center, San Juan,
                                    P.R. <br>
                                    <strong>2020</strong> <br>
                                    <br>
                                    <strong>Punto Medio: Mitos y Dioses, Eric Tabales</strong> <br>
                                    Museo de las Américas, San Juan, P.R. <br>
                                    <strong>2018</strong>
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>Conexos: Noemi Ruiz, Anna Nicholson y Susana
                                        Herrero</strong> <br>
                                    Space Gallery, San Patricio Art Center, San Juan,
                                    P.R. <br>
                                    <strong>2018</strong> <br> <br>
                                    <strong>El origen de la imagen, Bocetos y Diseños de
                                        Lorenzo Homar</strong> <br>
                                    Space Gallery, San Patricio Art Center, San Juan ,
                                    P.R.
                                    <strong>2018</strong> <br> <br>
                                    <strong>Cossette Zeno, Antología 1951-2014 /
                                        Retrospective exhibition</strong> <br>
                                    Museo de Arte de Caguas, P.R. <br>
                                    <strong>2015</strong> <br> <br>
                                    <strong>Prisma, pinturas de Jose R. Oliver</strong> <br>
                                    Museo de Arte de Arecibo, P.R. <br>
                                    <strong>2015</strong> <br>

                                    <strong>Camino al Mirador Azul,</strong> Galeria de Arte USC <br>
                                    <strong>2014</strong> <br><br>

                                    <strong>Linda Sánchez Pintor, Esculturas</strong>
                                    De museo Galeria de Arte <br>
                                    <strong>2013</strong>
                                    <br><br>
                                    <strong>Dulce Pinzón , Super heroes</strong> <br>
                                    Gallery at the Center, Columbia University NYC
                                    Noviembre, 2012. New York City. <br>
                                    <strong>2012</strong> <br><br>
                                    Lorenzo Homar, El trazo mítico
                                    Museo Francisco Oller
                                    Bayamón, Puerto Rico <br>
                                    <strong>2011</strong>
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>Lorenzo Homar (1913-2004): Obra y Legado</strong>
                                    ... de Museo GALERÍA DE ARTE =. San Juan,
                                    Puerto Rico
                                    <br>
                                    <strong>2010</strong> <br><br>

                                    <strong>CIRCA Puerto Rico ‘08 / Third Edition
                                        International Art Fair</strong> <br>
                                    ... de Museo GALERIA DE ARTE
                                    Centro de Convenciones de Puerto Rico. 14 al 16 de
                                    abril de 2008, Booth A- 5
                                    San Juan, Puerto Rico
                                    <br> <br>
                                        <strong> Merrill Lynch Arteaméricas,The Latin American
                                            Art Fair
                                            </strong><br>
                                    ... de Museo GALERIA DE ARTE
                                    Miami Beach Convention Center, Miami, Florida <br>
                                    <strong>2007</strong>
                                    <br> <br>
                                    <strong>CIRCA Puerto Rico ‘07/ Second Edition
                                        International Art Fair</strong> <br>
                                    ... de Museo GALERÍA DE ARTE
                                    Centro de Convenciones de Puerto Rico, 30 de
                                    marzo al 2 de abril de 2007 Booth A- 2 San Juan,
                                    Puerto Rico
                                    <br><br>
                                    <strong>Iván Girona: INTENSO</strong><br>
                                    ... de Museo GALERÍA DE ARTE
                                    San Juan, Puerto Rico <br>
                                    <strong>2006</strong> <br>
                                    <strong>Photo Miami ‘06
                                        The International Contemporary Art Fair of Photo
                                        – Based Art, Video & New Media</strong><br>
                                    ... de Museo GALERIA DE ARTE, Wynwood Art
                                    District <br>
                                    Miami, Florida
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>Primera Colectiva de Arte Clásico Puertorriqueño</strong> <br>
                                    ... de Museo GALERÍA DE ARTE
                                    San Juan, Puerto Rico, <strong>2005</strong> <br><br>
                                    <strong>Walt Dehner: Pilar de la Plástica Puertorriqueña</strong> <br>
                                    ... de Museo GALERÍA DE ARTE
                                    San Juan, Puerto Rico <br>
                                    <strong>2004</strong> <br> <br>
                                    <strong>Carlos Marcial: Al desnudo</strong> <br>
                                    ... de Museo GALERÍA DE ARTE
                                    San Juan, Puerto Rico <br>
                                    <strong>2004</strong> <br> <br>
                                    <strong>Félix Bonilla Norat: Maestro del color y
                                        movimiento</strong> <br>
                                    ... de Museo GALERÍA DE ARTE
                                    San Juan, Puerto Rico <br>
                                    <strong>2003</strong> <br>
                                    <strong>José Meléndez Contreras: Obra sobre papel
                                        (1948- 1953)</strong> <br>
                                    ... de Museo GALERÍA DE ARTE
                                    San Juan, Puerto Rico <br>
                                    <strong>2003</strong>
                                    <strong>Añoranzas: Obras recientes de Samuel Sánchez</strong>
                                    ... de Museo GALERÍA DE ARTE
                                    San Juan, Puerto Rico <br>
                                    <strong>2002</strong> <br> <br>
                                    <strong>Carlos Marcial: Parajes Olvidados</strong> <br>
                                    ... de Museo GALERÍA DE ARTE
                                    San Juan, Puerto Rico <br>
                                    <strong> 2002</strong>
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>Isaura Mergal: Simplemente Naif</strong> <br>
                                    ... de Museo GALERÍA DE ARTE
                                    San Juan, Puerto Rico <br>
                                    <strong>2002</strong> <br> <br>
                                    <strong>Leslie Colombani: Regenerando</strong> <br>
                                    ... de Museo GALERÍA DE ARTE
                                    San Juan, Puerto Rico <br>
                                    <strong>2001</strong> <br>
                                    <strong>Félix Bonilla Norat: Su espacio interior</strong> <br>
                                    ... de Museo GALERÍA DE ARTE
                                    San Juan, Puerto Rico <br>
                                    <strong>2001</strong> <br><br>
                                    <strong>Carlos Raquel Rivera, Una visión personal</strong> <br>
                                    Galería de Arte
                                    Universidad del Sagrado Corazón
                                    San Juan, Puerto Rico <br>
                                    <strong>2001</strong> <br> <br>
                                    <strong>Primera Muestra de Arte Clásico Puertorriqueño</strong> <br>
                                    ... de Museo GALERÍA DE ARTE
                                    San Juan, Puerto Rico <br>
                                    <strong>2000</strong> <br> <br>
                                    <strong>Félix Bonilla Norat: Intérprete de su tiempo</strong> <br>
                                    ... de Museo GALERÍA DE ARTE
                                    San Juan, Puerto Rico <br>
                                    <strong>2000</strong>
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    RESEÑAS EN PRENSA ESCRITA / PRESS,
                                    FEATURES <br> <br>

                                    <strong>RECENT PRESS. Tags; José Correa Vigier,
                                        Cossette Zeno, Eugenio Fernández Granell.</strong>
                                    <br><br>
                                    <strong>Visión Doble, Ocho mil espejos Oscuros. Galeria
                                        de arte USC,</strong> Cheryl Hartup, Febrero de 2014 <br> <br>

                                    <strong>Obra y legado de Lorenzo Homar en el Museo
                                        Galería de Arte.</strong> Jorge Rodríguez. 11 de marzo de
                                    2010. Periódico El Vocero. Páginas 52 y 53. <br> <br>

                                    <strong>Legado de Lorenzo Homar.</strong> Leyra E. González. 11
                                    de marzo de 2010. Periódico El Nuevo Día. Página
                                    80. <br> <br>

                                 <strong>   Reaparecen serigrafías de los VIII Juegos
                                    Panamericanos de Lorenzo Homar.</strong> Jorge
                                    Rodríguez. 17 de junio de 2010.
                                    Periódico El Vocero. Páginas 44 y 45. <br><br>

                                    <strong>Iván Girona: intenso.</strong> Mariana García Benítez, 17 de
                                    mayo de 2007. Periódico Primera Hora. Página 73.
                                    <br><br>
                                    <strong>Avalancha visual.</strong> Ana Teresa Toro Ortiz, 12 de
                                    mayo de 2007. Periódico El Nuevo Día. Páginas 96 y
                                    97.
                                    <br><br>
                                    <strong>Intenso Iván Girona.</strong> Jorge Rodríguez, 11 de mayo
                                    de 2007. Periódico el Vocero. Páginas 8 y 9. <br> <br>

                                    <strong>Todo un floorplan en CIRCA PUERTO RICO 07.</strong><br>
                                    Lilliam Nieves. <br>
                                    www.tranceliquido.com/2007/04/17/todo-un-
                                    floorplan. <br>
                                    Abril 17, 2007
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>UNA APERTURA A LA DUALIDAD DE LOS
                                        SIGLOS ...de Museo GALERÍA DE ARTE.</strong> <br>
                                    Entrevista- Corinne Timsit / Redacción- Carmen
                                    Graciela Díaz, marzo a abril de 2007. Art PREMIUM
                                    La Revista de Arte de Puerto Rico Vol. 4 Núm. 18.
                                    Páginas 60- 63.
                                    <br><br>
                                    <strong>Merrill Lynch Arteaméricas de nuevo en Miami.</strong> <br>
                                    Raisa Clavijo, 22 de marzo de 2007. Periódico
                                    Primera Hora. <br>
                                    Páginas 68 y 69. <br> <br>

                                    <strong>A romper el insularismo.</strong> Juan Carlos Pérez Duthie,
                                    19 de marzo de 2007. Periódico El Nuevo Día. <br>
                                    Páginas 72 y 73. <br> <br>

                                    <strong>Room for more.</strong> Culturesurge/ Artburst, 18 de
                                    marzo de 2007. Juan Carlos Pérez Duthie. www.
                                    category305.com/200704/18/roomformore. Marzo
                                    18, 2007.
                                    <br><br>
                                    <strong>Impactan los latinoamericanos en Arteaméricas
                                        ’07. </strong> Jorge Rodríguez, 17 de marzo de 2007.
                                    Periódico el Vocero. Página 39.
                                    <br><br>
                                    <strong>Comienza hoy Arteaméricas en la ciudad del sol.</strong>
                                    Por la Redacción, 16 de marzo de 2006. Periódico El
                                    Nuevo Día. Página 90.
                                    <br><br>

                                    <strong>More on Miami. </strong> Ben Davis, 16 de diciembre de
                                    2006. Artnet Magazine. Páginas 1- 7. <br>
                                    <strong>Cultura.</strong> Mario Alegre Barrios, 5 de diciembre de
                                    2006. Periódico El Nuevo dia.
                                    <br><br>
                                    <strong>Arte entre la expresión y la inversión.</strong> Tamara
                                    Estrada del Campo, octubre a noviembre de 2006.
                                    Revista Industriales. <br>
                                    Páginas 58 y 59.
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>Nueva sede para el arte.</strong> Por la Redacción de El
                                    Vocero, 14 de octubre de 2006. Periódico El Vocero.
                                    Página 16. <br> <br>

                                    <strong>Galería representa a grandes maestros y nuevos
                                        talentos.</strong> Angiemer Vázquez Acevedo, 7 de octubre
                                    de 2006. Periódico <br>
                                    Primera Hora. Página 32.
                                    <br><br>
                                <strong>    Doce Galerías de San Juan en tributo al artista
                                    Basquiat en Puerto Rico.</strong> Redacción, octubre de
                                    2006. <strong>Art PREMIUM</strong> La Revista de Arte de Puerto
                                    Rico. Edición Especial. Páginas 1 y 4. <br> <br>

                                    <strong>Entrevista a Linda Sánchez Pintor.</strong> Presentación
                                    para el PR Art and Wine Fair. 26 de septiembre de
                                    2006. Cultura Viva. 8:00 PM. TuTV Canal 6.
                                    <br><br>
                                   <strong> Linda Sánchez Pintor, POETA DE LA LÍNEA Y
                                    EL ESPACIO.</strong> Ralph Vázquez, julio a agosto 2005.
                                    Nuevo Talento, <strong>Art PREMIUM</strong> La Revista de Arte
                                    de Puerto Rico. Vol. 2 Núm. 9. Páginas 80- 83.
                                    <br><br>
                                    <strong>Nuevos diálogos con Colombani.</strong> Jorge Rodríguez,
                                    28 de agosto de 2004. Periódico el Vocero. Página
                                    38.
                                    <br><br>
                                    <strong>Nuevos diálogos de Leslie Colombani.</strong> Redacción,
                                    18 de agosto de 2004. Periódico El Vocero. Página
                                    19. <br> <br>
                                    <strong>El espejo de la tradición artística... de Museo
                                        Galería de Arte.</strong> Entrevista- Maribella Martínez/
                                    Redacción. <strong>Art PREMIUM</strong> La Revista de Arte de
                                    Puerto Rico. Volumen 1 Número 2 Edición Marzo/
                                    Abril 2004. Páginas 16- 20.
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>Marcial al desnudo en la Galería ... de Museo.</strong> <br>
                                    Redacción, 21 de febrero de 2004. Periódico El
                                    Nuevo Día. Página 34.
                                    <br><br>
                                    <strong>Maestro del color y movimiento Félix Bonilla
                                        Norat.</strong> Jorge Rodríguez, 6 de noviembre de 2003.
                                    Periódico el Vocero. <br>
                                    Páginas E2, E16 y E17.
                                    <br><br>
                                    <strong>Bonilla Norat en ... de Museo. </strong> Redacción, 31 de
                                    octubre de 2003. Periódico El Nuevo Día. Página
                                    25. <strong>Galeristas de vanguardia. </strong> Ileana Cidoncha, 30
                                    de octubre de 2003. Periódico el Vocero. Portada
                                    Revista Escenario. <br>
                                    Páginas E7 - E9. <br> <br>

                                    <strong>A la luz varios Meléndez.</strong> Tatiana Pérez Rivera, 11
                                    de septiembre de 2003. Periódico El Nuevo Día.
                                    Página 6. 
                                    <br> <br>
                                    <strong>Obra sobre papel de Meléndez Contreras.</strong> Jorge
                                    Rodríguez, 11 de septiembre de 2003. Periódico el
                                    Vocero. <br>
                                    Páginas E2 y E15.
                                    <br><br>
                                    <strong>La esencia original de Bonilla.</strong> Haydee Venegas
                                    Ávila, 29 de agosto de 2003. Periódico El Nuevo
                                    Día. Página, 6
                                    <br><br>
                                    <strong>Tras bastidores.</strong> María Trelles Hernández, 28 de
                                    agosto de 2003. Periódico Primera Hora. Páginas
                                    68 y 69. 
                                    <br><br>
                                    <strong>José Bonilla Ryan: homenaje y un nuevo espacio.</strong>
                                    Jorge Rodríguez, 12 de agosto de 2003. Periódico el
                                    Vocero. <br>
                                    Páginas E12 y E13.
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>A exponer 30 obras de Bonilla Ryan.</strong> Tatiana Pérez
                                    Rivera, 9 de agosto de 2003. Periódico El Nuevo
                                    Día. Página 28.
                                    <br><br>

                                    <strong>José Bonilla Ryan legado abstracto boricua.</strong>
                                    Jorge Rodríguez, 2 de agosto de 2003. Periódico el
                                    Vocero. Páginas E6 y E7.
                                    <br><br>
                                    <strong>El Boom de las Galerías de Arte en el Puerto Rico
                                        del siglo XXI/ “The Boom” of the Art Galleries in
                                        Puerto Rico, 21st
                                        Century. </strong> Profesora Haydée Venegas.
                                    CONTEMPORANÍA <i>La revista del arte en el Caribe
                                        Internacional/ The Art in the International Caribbean
                                        Magazine.</i> Número 13 Mayo a Julio de 2003.
                                    Páginas 52- 58.
                                    <br><br>
                                    <strong>Noche de luna.</strong> Redacción, abril 2003. Modo de
                                    Vida Recurso de ideas para la remodelación y
                                    decoración del hogar. Página 94.
                                    <br><br>
                                    <strong>Samuel Sánchez... candidez y franqueza.</strong>
                                    José Antonio Pérez Ruiz, 19 de abril de 2003.
                                    Periódico el Vocero. <br>
                                    Páginas E6 y E7.
                                    <br><br>
                                    <strong>A premiar lo mejor de la plástica. </strong> Redacción, 2 de
                                    marzo de 2003. Periódico El Nuevo Día. Páginas 80
                                    y 81. <br> <br>
                                    <strong>De lo histórico a la modernidad.</strong> Jorge Rodríguez,
                                    17 de septiembre de 2002. Periódico el Vocero.
                                    Páginas E22 y E23. <br><br>

                                    <strong>Exposición de artistas locales.</strong> Por la Redacción,
                                    14 de septiembre de 2002. Periódico El Nuevo Día. <br>
                                    Página 79.
                                    
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>Carlos Marcial.</strong> 25 de agosto de 2002. Revista
                                    Domingo, Periódico El Nuevo Día. Página 3.
                                    <br><br>
                                    <strong>Parajes olvidados con chasis.</strong> Mario Alegre
                                    Barrios, 18 de agosto de 2002. Periódico El Nuevo
                                    Día. Página 88.
                                    <br><br>
                                    <strong>Parajes olvidados de Carlos Marcial.</strong> Redacción,
                                    17 de agosto de 2002. Periódico el Vocero. Página
                                    E16.
                                    <br><br>
                                    <strong>Hoy se inaugura Arte en dos tiempos.</strong> Redacción,
                                    23 de mayo de 2002. Periódico El Nuevo Día.
                                    Página 95.
                                    <br><br>
                                    <strong>La noche de los premios AICA.</strong> Jorge Rodríguez,
                                    28 de marzo de 2002. Periódico el Vocero. Página
                                    E8.
                                    <br><br>
                                    <strong>Entrega la AICA sus premios.</strong> Rebecca Noriega
                                    Costas, 28 de marzo de 2002. Periódico El Nuevo
                                    Día. Páginas 86 y 87.
                                    <br><br>
                                    <strong>Preludio polémico para la AICA.</strong> Mario Alegre
                                    Barrios, 20 de marzo de 2002. Periódico El Nuevo
                                    Día. Páginas 72 y 73.
                                    <br><br>
                                    <strong>Reparten suerte críticos de arte.</strong> Jorge Rodríguez,
                                    16 de marzo de 2002. Periódico el Vocero. Páginas
                                    E10 y E11.
                                    <br><br>
                                    <strong>Isaura Mergal simplemente naif.</strong> Por Redacción, 13
                                    de marzo de 2002. Periódico El Nuevo Día. Página
                                    76.
                                    <br><br>
                                    <strong>Isaura Mergal... y su misteriosa poesía pictórica.</strong>
                                    Jorge Rodríguez, 9 de marzo de 2002. Periódico el
                                    Vocero. <br>
                                    Páginas E6 y E7.
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>Colombani en ... de Museo.</strong> Redacción, 7 de
                                    febrero de 2002. Periódico El Nuevo Día. Página 77.
                                    <br><br>
                                    <strong>Intramundos de Leslie Colombani. </strong>José Antonio
                                    Pérez Ruiz, 6 de febrero de 2002. Periódico el
                                    Vocero. Páginas E28 y E29.
                                    <br><br>
                                    <strong>Agenda en... de Museo.</strong> Redacción, 4 de enero de
                                    2002. Periódico El Nuevo Día. Página 75.
                                    <br><br>
                                    <strong>Chispeante arte 2001.</strong> Maribel Aguayo, 3 de enero
                                    de 2002. Periódico el Vocero. Página E22.
                                    <br><br>
                                    <strong>Apertura en... de Museo.</strong> Mario Alegre Barrios,
                                    22 de diciembre de 2001. Periódico El Nuevo Día.
                                    Página 79.
                                    <br><br>
                                    <strong>El espacio íntimo de Bonilla Norat.</strong> Mario Alegre
                                    Barrios, 25 de octubre de 2001. Periódico El Nuevo
                                    Día. Página 102.
                                    <br><br>
                                    <strong>El nuevo Museo de Arte de Puerto Rico.</strong> Haydee
                                    Venegas, octubre de 2001. Revista Arco, España.
                                    Núm. 22.
                                    <br><br>
                                    <strong>“... de Museo” una galería visionaria.</strong> José Antonio
                                    Pérez Ruiz, 28 de abril de 2001. Periódico el Vocero.
                                    Páginas E2 y E3.
                                    <br><br>
                                    <strong>Un pintor llamado Carlos Raquel.</strong> José Antonio
                                    Pérez Ruiz, 21 de abril de 2001. Periódico el Vocero.
                                    Páginas E18 y E19.
                                    <br><br>
                                    <strong>Nueva galería en Miramar.</strong> Antonio J. Molina, 1 de
                                    junio de 2000. Periódico El Diario. Página 15.
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                                    <strong>Nuevas microempresas en horizonte sanjuanero.</strong>
                                    Ileanexis Vera Rosado, 4 de mayo de 2000.
                                    Periódico el Vocero. <br>
                                    Página 67.
                                    <br><br>
                                    <strong>Félix Bonilla Norat... intérprete de su tiempo.</strong> José
                                    Antonio Pérez Ruiz, 20 de marzo de 2000. Periódico
                                    El Vocero. <br>
                                    Página E12.
                                    <br><br>
                                    <strong>... de Museo con Bonilla Norat.</strong> 12 de marzo de
                                    2000. Por la Redacción. 12 de marzo de 2000.
                                    Periódico El Nuevo Día. <br>
                                    Página 78.
                                    <br><br>
                                    <strong>Desde el Caribe</strong>. Abil Peralta Agüero, 2000. Arte al
                                    Día News. Página 5.
                                    <br><br>
                                    <strong><u>FILMOGRAFIA / FILMOGRAPHY</u></strong>
                                    <br><br>
                                    <strong>The Needle/ La Aguja</strong>
                                    (2012) Director, Cinematographer, Associate
                                    producer.
                                    <br><br>
                                    <strong>Camil</strong>
                                    (2012) Director, Cinematography.
                                    <br><br>
                                    <strong>Pandora’s Boxed</strong>
                                    (2016) Director,Cinematographer, Editor, Producer.
                                    <br><br>
                                    <strong>Heteropraxis</strong>
                                    (2016) Director, Cinematographer, Editor, Producer.
                                    <br><br>
                                    <strong>Deep Water Sway/Agua Fuerte</strong>
                                    (2017) Director, Cinematographer, Editor, Producer. 
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
                            <td class="tabSubtitulo">
                                
                            </td>
                            <td>
                                <p class="tablaContenido">
                             <strong>       EVALUACIÓN DE COLECCIONES PÚBLICAS Y
                                PRIVADAS (selección)</strong>
                                    <br><br>
                                    <strong><small>Agency of Private and public art collections (selection)</small></strong>
                                    <br><br>
                                    <strong>Museo de Arte de Ponce</strong>
                                    Ponce, Puerto Rico
                                    <br><br>
                                    <strong>Sucesión Lorenzo Homar, San Juan Puerto Rico</strong>
                                    Evaluador/Curador delegado
                                    San Juan, Puerto Rico
                                    <br><br>
                                    <strong>ICP, Instituto de Cultura puertorriqueña</strong>
                                    San Juan, Puerto Rico
                                    <br><br>
                                    <strong>Museo de Arte de Puerto Rico</strong>
                                    San Juan, Puerto Rico
                                    <br><br>
                                    <strong>Cooperativa de Seguros Múltiples de Puerto Rico</strong>
                                    San Juan, Puerto Rico
                                    <br><br>
                                    <strong>University of New Mexico, Collection of the
                                        Library, Mr. Russ Davidson, Curator</strong>
                                    Alburquerque, New México
                                    <br><br>
                                    <strong>Museo de Historia, Antropología y Arte</strong>
                                    Universidad de Puerto Rico
                                    Recinto de Río Piedras
                                    Río Piedras, Puerto Rico
                                    <br><br>
                                    <strong>Museo de Arte de Bayamón</strong>
                                    Gobierno Autónomo de Bayamón
                                    Bayamón, Puerto Rico
                                    <br><br>
                                    <strong>Colección Chocolate Cortés</strong>
                                    Caguas, Puerto Rico
                                    <br><br>
                                    <strong>World Chess Hall of fame</strong>
                                    Saint Louis, Missouri. U.S.A.
                                    <br><br>
                                    <strong>Coleccion Empresas Bacardi</strong>
                                    Cataño, Puerto Rico
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
                   <div class="barra barra6"></div>
                   <img src="{{asset('public/img/home.png')}}" class="homeIcon"  alt="home" id="homeIcon">
       
               </div>
               <div class="col-12 slide3Title tituloInt">
                   <p>&nbsp; Aliados</p>
               </div>
               <div class="slide3Content">
               <p> Esta muestra pretende explorar la rica herencia
                cultural de la mitología y la espiritualidad a través
                del arte contemporáneo, en un paralelismo con la
                sociedad actual.
                <br><br>
                Hasta la fecha, hemos establecido contactos
                prometedores con diversos sectores clave,
                incluyendo DMO de Puerto Rico (Destination
                Management Organization).
                <br><br>
                El gobierno de la Ciudad de San Juan, empresas
                privadas y coleccionistas privados y programas de
                ayuda federal, “Endowment”, (USA) para las artes.
                <br><br>
                Entendemos la importancia de colaborar con
                entidades comprometidas con el desarrollo cultural
                y artístico, y creemos en este proyecto.
                <br><br>
                Los patrocinios financieros, donaciones en especie
                o programas de becas, serán fundamentales para
                garantizar el éxito de la exhibición y su impacto
                duradero en nuestra comunidad.
                <br><br>
                Dichas gestiones ya se han comenzado, por la
                presentación de la Muestra en el Museo Rollins en
                Winter Park, Florida. Gracias a su carta de invitación
                y toda la documentación presentada a dichas
                Instituciones y personas. Lo mismo quisieramos
                extender para la presentación en México.
                <br><br>
                Agradecemos de antemano su consideración y apoyo.
                Juntos, podemos hacer de “Mitos y Dioses” una
                experiencia cultural única e inspiradora, presentada
                en México, Puerto Rico y Estados Unidos para el
                beneficio y disfrute del público en cada país.</p>
               </div>
               
           </div>
   </swiper-slide>


   <swiper-slide>
    
      <div class="row">
          <div class="col-12">                    
              <div class="barra barra6"></div>
              <img src="{{asset('public/img/home.png')}}" class="homeIcon"  alt="home" id="homeIcon">
  
          </div>
          <div class="col-12 slide3Title tituloInt">
              <p style="font-size: 40px">&nbsp; Propuesta</p>
              <p style="font-size: 40px">&nbsp; <strong>de programa</strong></p>
              <p style="font-size: 40px">&nbsp; <strong>público</strong></p>
          </div>
          
          <div class="slide3Content">
            <p>
                Para la exhibición Mitos y dioses, solicitada
                para el Museo de Arte Moderno de México para
                consideración, me gustaría cubrir las siguientes
                actividades durante el tiempo que la misma se esté
                presentando.
            </p>
            <p>
                Los ponentes y talleristas podrían incluir figuras
                destacadas en los campos de género, arte indígena,
                estudios culturales y activismo social, tanto de
                México como de Puerto Rico y otras partes del
                mundo.
            </p>
            <p>
                Para la exhibición las actividades a considerar
                serían las siguientes:
            </p>
            <p style="font-weight: bold;margin-button:-10px">1. Conferencias y paneles:</p>
            <p>
                • Panel sobre “Perspectivas de género en la mitología
                antigua y contemporánea” con ponentes expertos
                en estudios de género e historia.
                <br><br>
                • Conferencia sobre “Mitología y resistencia: voces
                indígenas en el arte contemporáneo” con líderes
                indígenas y artistas visuales.
                <br><br>
                • Mesa redonda sobre “Narrativas de inclusión:
                representación LGQTIIQ+ en el arte y la mitología”
                con activistas y artistas queer.
            </p>
          </div>

       
          
      </div>
</swiper-slide>

<swiper-slide>
       
  <div class="row">
      <div class="col-12">                    
          <div class="barra barra6"></div>
          <img src="{{asset('public/img/home.png')}}" class="homeIcon"  alt="home" id="homeIcon">

      </div>
      <div class="slide3Content">
        <p style="font-weight: bold;margin-button:-10px">2. Talleres interactivos:</p>
        <p>
            • Taller de arte para mujeres sobrevivientes de
            violencia de género, enfocado en expresión
            creativa y sanación.
            <br><br>
            • Taller de mitología comparada, explorando
            paralelismos entre las creencias ancestrales y las
            narrativas contemporáneas.
            <br><br>
            • Taller de narración de historias para jóvenes
            indígenas, destacando la importancia de
            preservar y compartir tradiciones orales.
        </p>
        <p style="font-weight: bold;margin-button:-10px">3. Proyecciones y presentaciones:</p>
        <p>
            • Proyección de cortometrajes sobre mitología y
            género, producidos por cineastas emergentes.
            <br><br>
            • Presentación de libros y materiales educativos
            sobre mitología y diversidad cultural, con énfasis
            en textos inclusivos y representativos.
        </p>
        <p style="font-weight: bold;margin-button:-10px"> 4. Exposiciones adicionales, que se esten
            presentando al unison en la Ciudad que aborden:</p>
        <p>
            • Exposición de arte indígena contemporáneo,
            destacando obras que reinterpretan mitos
            ancestrales desde una perspectiv contemporánea.
            <br><br>
            • Exposición fotográfica sobre identidad de género
            y diversidad sexual en comunidades marginadas,
            con retratos y testimonios de personas LGQTIIQ+.
            <br><br>
            Los ponentes y talleristas podrían incluir figuras
            destacadas en los campos de género, arte indígena,
            estudios culturales y activismo social, tanto de
            México como de Puerto Rico y otras partes del
            mundo.
        </p>
      </div>


  </div>
</swiper-slide>

        <swiper-slide >
           <div class="divFooter">
                <div class="container">
                    <div class="row">
                        <div class="col-12 textoFooter">
                            <p style="font-size: 20px">Con gratitud, emoción y respeto,</p>
                            <p style="font-size: 30px">Eric Tabales</p>
                            <p style="font-size: 20px">Artista</p>
                        </div>
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
