@extends('layout')
@section('page', 'Inicio')

@section('content')
    <!-- home section starts  -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <section class="swiper-slide slide" style="background: url(./images/banner.jpg) no-repeat;">
                    <div class="content">
                        <h3>Al Margen de la Educación</h3>
                        <p>Es una institución oficial legalmente aprobada por la Secreataría de Educación del Meta y ofrece preescolar, primaria, básica secundaria y media académica y técnica en las jornadas mañana y tarde, con la sede José María Córdoba.</p>
                    </div>
                </section>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- subjects section starts  -->

    <section class="subjects">

        <h1 class="heading">Información Acerca de la Institución</h1> 

        <div class="box-container">

            <div class="box">
                <img src="images/info.png" alt="">
                <h3>Información Institucional</h3>
                <a href="{{ Route('About_us') }}" class="btn">Leer</a>
                <p></p>
            </div>

            <div class="box">
                <img src="images/galeriaicono.png" alt="">
                <h3>Galeria</h3>
                <a href="#" class="btn">Leer</a>
                <p></p>
            </div>

            <div class="box">
                <img src="images/historia.png" alt="">
                <h3>Historia</h3>
                <a href="http://talentogalanista.blogspot.com/p/historia-del-colegio.html" class="btn">Leer</a>
                <p></p>
            </div>

            <div class="box">
                <img href="home.html" class="link" src="images/profesores.png" alt="">
                <h3>Planta Profesoral</h3>
                <a href="{{ Route('Profesores') }}" class="btn">Leer</a>
                <p></p>
            </div>

            <div class="box">
                <img src="images/escudo.png" alt="">
                <h3>Modalidades</h3>
                <a href="{{ Route('modalidades') }}" class="btn">Leer</a>
                <p></p>
            </div>

            <div class="box">
                <img src="images/modelo.png" alt="">
                <h3>Modelo Pedagogico</h3>
                <a href="{{ Route('Modelo') }}" class="btn">Leer</a>
                <p></p>
            </div>

        </div>

    </section>

    <!-- Sujetos Seccion Final -->

    <section class="contact">

        <h1 class="heading"> Contactos </h1>

        <div class="icons-container">

            <div class="icons">
                <i class="fas fa-clock"></i>
                <h3> Horario de Atención en Secretaría :</h3>
                <p>Lunes a Viernes</p>
                <p>08:00am hasta 12:00m</p>
                <p>02:00pm hasta 6:00pm</p>
            </div>

            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3> Telefonos :</h3>
                <p>+573045856100</p> <br>

                <i class="fas fa-envelope"></i>
                <h3> Correo Electronico : </h3>
                <p>colegiogalan1967@hotmail.com</p>
            </div>

           

            <div class="icons">
                <i class="fas fa-map"></i>
                <h3>Dirección Sede Principal José Antonio Galán :</h3>
                <p>Calle 9 N°21-84 Barrio Los Limones, Cumaral-Meta Colombia </p>
            </div>

            <div class="icons">
                <i class="fas fa-map"></i>
                <h3>Dirección Sede José María Córdoba :</h3>
                <p>Cra 20 N°8-20 Barrio Simón Bolívar, Cumaral-Meta Colombia </p>
            </div>

        </div>

    </section>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="src/resources/js/custom.js"></script>
@endsection
