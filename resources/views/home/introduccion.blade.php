@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{asset('public/css/home/introduccion.css')}}">
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
                    <p>LISTA PRELIMINAR DE OBRAS</p>
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
                <img src="{{asset('public/img/Dafne.jpg')}}" alt="Dafne.jpg" id="imgDafne">
                <button id="btnVideo">
                    <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="26px"><path d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z" fill="currentColor"></path></svg>
                  </button>
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
        <div class="swiper-slide">
            <svg xmlns="http://www.w3.org/2000/svg" class="homeIcon" width="128" height="128" viewBox="0 0 32 32"><path fill="#333333" d="M16.612 2.214a1.01 1.01 0 0 0-1.242 0L1 13.419l1.243 1.572L4 13.621V26a2.004 2.004 0 0 0 2 2h20a2.004 2.004 0 0 0 2-2V13.63L29.757 15L31 13.428ZM18 26h-4v-8h4Zm2 0v-8a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v8H6V12.062l10-7.79l10 7.8V26Z"/></svg>
            <div class="barra"></div>
            <div class="container slide3Scroll">
                <div class="row">
                    <div class="slide3Content">
                        <p>
                            A medida que avanzaba la tecnología en mi vida y
                            trabajo, la necesidad de romper estereotipos en una
                            era de cambios constantes, se volvió cada vez más
                            evidente. La inteligencia artificial ya está presente,
                            un modernismo que debo fundir con mi enfoque
                            helenistas en un mundo moderno. Aun cuando para la
                            primera puesta, apenas podía tener acceso a internet
                            (uso público general 1991), y no fue hasta la segunda
                            que obtuve el mayor provecho.
                        </p>
                        <p>
                            En esta última selección, aún no presentada, la
                            culminación y final de este viaje, aprovecho el
                            desenlace para hablar por vez primera de mí. La
                            muestra acaba con mi autorretrato, inspirado en la
                            Victoria de Samotracia.
                        </p>
                        <p>
                            Como ella, me siento alada, sin cabeza ni manos, pero
                            poderosa en todos los sentidos. En esta obra número
                            100, dos personas, dos países se fusionan en una
                            sola expresión de arte y vida y brindan un merecido
                            homenaje a la comunidad LGBTTIQ+.
                        </p>
                        <p>
                            Ante esta visión curatorial cosmopolita, la necesidad de
                            expresión de sectores marginados, decido presentar
                            la exhibición “Mitos y dioses”, en el exterior. Invitado
                            por el Museum Rollins en Florida, Estados Unidos,
                            para el 2025 e invitado por el Instituto de Cultura de
                            Puerto Rico a presentarla. Sentía un enorme vacío el
                            no presentarla en mi amado México, el país que me
                            educó.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <svg xmlns="http://www.w3.org/2000/svg" class="homeIcon" width="128" height="128" viewBox="0 0 32 32"><path fill="#333333" d="M16.612 2.214a1.01 1.01 0 0 0-1.242 0L1 13.419l1.243 1.572L4 13.621V26a2.004 2.004 0 0 0 2 2h20a2.004 2.004 0 0 0 2-2V13.63L29.757 15L31 13.428ZM18 26h-4v-8h4Zm2 0v-8a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v8H6V12.062l10-7.79l10 7.8V26Z"/></svg>
            <div class="barra"></div>
            <div class="container slide3Scroll">
                <div class="row">
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
        </div>
        
        
        <div class="swiper-slide" id="slideSeccion2">
            <svg xmlns="http://www.w3.org/2000/svg" class="homeIcon2" width="128" height="128" viewBox="0 0 32 32"><path fill="#333333" d="M16.612 2.214a1.01 1.01 0 0 0-1.242 0L1 13.419l1.243 1.572L4 13.621V26a2.004 2.004 0 0 0 2 2h20a2.004 2.004 0 0 0 2-2V13.63L29.757 15L31 13.428ZM18 26h-4v-8h4Zm2 0v-8a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v8H6V12.062l10-7.79l10 7.8V26Z"/></svg>
            <div class="barra2 barra">
                
            </div>
            <div class="container slide3Scroll">
                <div class="row">
                    <div class="col-12 slide3Title">
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
            </div>
        </div>
        
        <div class="swiper-slide">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="homeIcon2" width="128" height="128" viewBox="0 0 32 32"><path fill="#333333" d="M16.612 2.214a1.01 1.01 0 0 0-1.242 0L1 13.419l1.243 1.572L4 13.621V26a2.004 2.004 0 0 0 2 2h20a2.004 2.004 0 0 0 2-2V13.63L29.757 15L31 13.428ZM18 26h-4v-8h4Zm2 0v-8a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v8H6V12.062l10-7.79l10 7.8V26Z"/></svg> --}}
            <div class="barra2 barra">
                
            </div>
            <div class="container lista listaContainer">
                <br>
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
                </ul>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="barra2 barra">
                
            </div>
            <div class="container lista listaContainer">
                <br>
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

        <div class="swiper-slide">
            <div class="barra2 barra">
                
            </div>
            <div class="container lista listaContainer">
                <br>
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

        <div class="swiper-slide">
            <div class="barra2 barra">
                
            </div>
            <div class="container lista listaContainer">
                <br>
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

        <div class="swiper-slide">
            <div class="barra2 barra">
                
            </div>
            <div class="container lista listaContainer">
                <br>
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
        
        <div class="swiper-slide">
            <div class="barra2 barra">
                
            </div>
            <div class="container lista listaContainer">
                <br>
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
        {{-- <div class="swiper-slide">
            <div class="barra2 barra">
                
            </div>
            <div class="container lista listaContainer">
                <br>
                <ul>
                    <li>
                        <div class="numLista">
                            60 &nbsp;
                        </div>
                        <div class="containerLista">
                            <div class="tituloLista">
                                “Bóreas”
                            </div>
                            <div class="subLista">
                                Año- 2018 | 48” x 60” | Medio mixto
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="numLista">
                            61 &nbsp;
                        </div>
                        <div class="containerLista">
                            <div class="tituloLista">
                                “Laocoonte”
                            </div>
                            <div class="subLista">
                                Año- 2018 | 48” x 60” | Medio mixto
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="numLista">
                            62 &nbsp;
                        </div>
                        <div class="containerLista">
                            <div class="tituloLista">
                                “Orestes y las Erinias”
                            </div>
                            <div class="subLista">
                                Año- 2018 | 48” x 60” | Medio mixto
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="numLista">
                            63 &nbsp;
                        </div>
                        <div class="containerLista">
                            <div class="tituloLista">
                                “Jasón y el Argo”
                            </div>
                            <div class="subLista">
                                Año- 2018 | 72” x 48” | Medio mixto
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="numLista">
                            64 &nbsp;
                        </div>
                        <div class="containerLista">
                            <div class="tituloLista">
                                “Eos”
                            </div>
                            <div class="subLista">
                                Año- 2018 | 48” x 72” | Medio mixto
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="numLista">
                            65 &nbsp;
                        </div>
                        <div class="containerLista">
                            <div class="tituloLista">
                                “Euro y la tempestad”
                            </div>
                            <div class="subLista">
                                Año- 2018 | 72” x 48” | Medio mixto
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="numLista">
                            66 &nbsp;
                        </div>
                        <div class="containerLista">
                            <div class="tituloLista">
                                “El rapto de Europa”
                            </div>
                            <div class="subLista">
                                Año- 2017 | 72” x 60” | Medio mixto
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="numLista">
                            67&nbsp;
                        </div>
                        <div class="containerLista">
                            <div class="tituloLista">
                                “Polimnia (La de varios himnos)”
                            </div>
                            <div class="subLista">
                                Año- 2018 | 60” x 40” | Medio mixto
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="numLista">
                            68 &nbsp;
                        </div>
                        <div class="containerLista">
                            <div class="tituloLista">
                                “Clío (La que da fama)”
                            </div>
                            <div class="subLista">
                                Año- 2018 | 60” x 48” | Medio mixto
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="numLista">
                            69
                        </div>
                        <div class="containerLista">
                            <div class="tituloLista">
                                “Euterpe (La encantadora)”
                            </div>
                            <div class="subLista">
                                Año- 2018 | 60” x 40” | Medio mixto
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div> --}}
        {{-- <div class="swiper-slide">
            <div class="barra2 barra">
                
            </div>
            <div class="container lista listaContainer">
                <br>
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
    </div> --}}
    <div class="swiper-pagination"></div>
</div>

 
<div id="myModal" class="modal">
    <div class="modal-content modal-lg">
        <span class="close">&times;</span>
        <video controls>
            <source src="{{asset('public/video/hectortroya.mp4')}}" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
    </div>
</div>

  @endsection
@section('js')
    <script src="{{asset('public/js/home/introduccion.js')}}"></script> 
@endsection
