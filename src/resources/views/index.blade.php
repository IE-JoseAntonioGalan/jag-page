@extends('layout')
@section('page', 'Inicio')

@section('content')
    <!-- home section starts  -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <section class="swiper-slide slide" style="background: url(./images/galan1.jpg) no-repeat;">
                    <div class="content">
                        <h3>Al margen de la educación</h3>
                        <p>El Colegio José Antonio Galán fue creado el 24 de Noviembre de 1967, con el objetivo de impartir
                            educación básica secundaria a las juventudes Cumaraleñas.</p>
                        <a href="#" class="btn">Ver Más Información</a>
                    </div>
                </section>

                <section class="swiper-slide slide" style="background: url(./images/galan3.jpg) no-repeat;">
                    <div class="content">
                        <h3>Por unos lideres capaces</h3>
                        <p>El liderazgo es la capacidad que tiene una persona de influir, motivar, organizar y llevar a cabo
                            acciones para lograr sus fines y objetivos que involucren a personas y grupos en una marco de
                            valores.</p>
                        <a href="#" class="btn">Ver Más Información</a>
                    </div>
                </section>

                <section class="swiper-slide slide" style="background: url(./images/galan4.jpg) no-repeat;">
                    <div class="content">
                        <h3>Acciones pedagogicas e inclusivas</h3>
                        <p>Estrategias didácticas y metodológicas para garantizar el aprendizaje, la participación y la
                            interacción de todos sus estudiantes.</p>
                        <a href="#" class="btn">Ver Más Información</a>
                    </div>
                </section>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- subjects section starts  -->

    <section class="subjects">

        <h1 class="heading">Información Institucional</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/mision.png" alt="">
                <h3>Misión</h3>
                <a href="{{ Route('About_us') }}" class="btn">Leer</a>
                <p></p>
            </div>

            <div class="box">
                <img src="images/vision.png" alt="">
                <h3>Visión</h3>
                <a href="{{ Route('About_us') }}" class="btn">Leer</a>
                <p></p>
            </div>

            <div class="box">
                <img href="home.html" class="link" src="images/valores.png" alt="">
                <h3>Valores</h3>
                <a href="{{ Route('About_us') }}" class="btn">Leer</a>
                <p></p>
            </div>

            <div class="box">
                <img src="images/escudo.png" alt="">
                <h3>El Escudo</h3>
                <a href="#" class="btn">Leer</a>
                <p></p>
            </div>

            <div class="box">
                <img src="images/bandera.png" alt="">
                <h3>La Bandera</h3>
                <a href="#" class="btn">Leer</a>
                <p></p>
            </div>

            <div class="box">
                <img src="images/info.png" alt="">
                <h3>Más Información</h3>
                <a href="#" class="btn">Leer</a>
                <p></p>
            </div>

        </div>

    </section>

    <!-- Sujetos Seccion Final -->

    <section class="contact">

        <h1 class="heading"> Contacto </h1>

        <div class="icons-container">

            <div class="icons">
                <i class="fas fa-clock"></i>
                <h3> Horario de Atención en Secretaria :</h3>
                <p>00:00am hasta 00:00pm</p>
            </div>

            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3> Telefonos :</h3>
                <p>+57</p>
                <p>+57</p>
            </div>

            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3> Correo Electronico : </h3>
                <p>@gmail.com</p>
                <p>@gmail.com</p>
            </div>

            <div class="icons">
                <i class="fas fa-map"></i>
                <h3>Dirección :</h3>
                <p>Calle 9 #21-84, Barrio Los Limones, Cumaral-Meta Colombia </p>
            </div>

        </div>

    </section>
@endsection
