@extends('layout')

@section('page', 'Nosotros')

@section('content')
    <section class="heading-link">
        <h3>Misión</h3>
    </section>

    <!-- about section starts  -->

    <section class="about">

        <div class="image">
            <img src="images/misiongalan.PNG" alt="">
        </div>

        <div class="content">
            <p>{{ $site_data->mission }}</p>
        </div>

    </section>

    <!-- about section ends -->

    <section class="heading-link">
        <h3>Vision</h3>
    </section>

    <!-- about section starts  -->

    <section class="about">

        <div class="content">
            <p>{{ $site_data->vision }}</p>
        </div>

        <div class="image">
            <img src="images/visiongalan.PNG " alt="">
        </div>

    </section>

    <!-- about section ends -->

    <section class="heading-link">
        <h3>Valores</h3>
    </section>

    <!-- about section starts  -->

    <section class="about">

        <div class="content">
            <p>
        - Responsabilidad <br>
        - Respeto <br>
        - Honestidad <br>
        - Tolerancia <br>
        - Equidad <br>
        - Alteridad</p>
        </div>

        <div class="image">
            <img src="images/valoresgalan.png " alt="">
        </div>

    </section>

    <!-- about section ends -->

    <section class="heading-link">
        <h3>Escudo</h3>
    </section>

    <!-- about section starts  -->

    <section class="about">

        <div class="image">
            <img src="images/escudo.png" alt="">
        </div>

        <div class="content">
            <p>
                <b> LEMA: FORMANDO PRESENTE Y CONSTRUYENDO FUTURO CON ORGULLO GALANISTA. </b> <br>
Está conformado por un ovalo ancho de color verde, símbolo de la Llanura, la esperanza y los triunfos de la juventud estudiosa, el óvalo lleva la cara del Líder Comunero en la parte interna superior, de quien tomamos el nombre de la Institución Educativa José Antonio Galán, lo acompañan un libro y un tintero con una pluma símbolo de la ciencia, la sabiduría y el arte de escribir, se entrelaza un festón rojo y amarillo dándole un tono de alegría e inteligencia, aspectos característicos de los estudiantes Galanistas. En la parte anterior, lo adorna el tricolor Nacional.

            </p>
        </div>

    </section>

    <!-- about section ends -->

    <section class="heading-link">
        <h3>La Bandera</h3>
    </section>

    <!-- about section starts  -->

    <section class="about">

        <div class="image">
            <img src="images/bandera.png" alt="">
        </div>

        <div class="content">
            <p>
                <b> 
La bandera de nuestra institución consta de dos franjas una de color verde y la otra blanca.  El color verde ocupa las dos terceras partes que  representan el crecimiento y la esperanza de nuestros jóvenes frente al mundo que los rodea, y el color blanco representa el optimismo, la bondad y la perfección de toda la comunidad educativa.


            </p>
        </div>

    </section>

    <!-- about section ends -->

    <section class="heading-link">
        <h3>Organigrama</h3>
    </section>

    <!-- about section starts  -->

    <section class="about">

        <div class="image">
            <img src="images/estructura.png" alt="">
        </div>

    </section>

    <!-- about section ends -->

    <section class="heading-link">
        <h3>Himno IE José Antonio Galán</h3>
    </section>

    <!-- about section starts  -->

    <section class="about">

        <div class="content">
            <p>
Coro <br>
Siento orgullo gritar: ¡Soy galanista! <br>
Defensor de las causas que nos unen, <br>
siento orgullo gritar:¡Soy galanista! <br>
El Galán es mi luz, ¡viva su lumbre! <br><br>

Canto al sol que se asoma en las mañanas, <br>
al crisol de la ciencia y sus linderos, <br>
al colegio que evoca las campañas <br>
de Galán, el valiente comunero. <br><br>

Eres flor, juventud, algarabía <br>
cantera de valores y costumbres, <br>
fuego intenso, virtud, autonomía, <br>
caminos que nos llevan a la cumbre. <br><br>

(Coro) <br>
Siento orgullo gritar: ¡Soy galanista! <br>
Defensor de las causas que nos unen, <br>
siento orgullo gritar:¡Soy galanista! <br>
El Galán es mi luz, ¡viva su lumbre! <br><br>

Cumaral es el cielo en que destellas <br>
verdad, amor, alegre vestidura, <br>
deportistas que suman mil estrellas, <br>
lunadas y derroches de cultura. <br><br>

En tus aulas se pulen sus linajes <br>
que ostentan banderas coloridas, <br>
defendemos el agua y el paisaje <br>
origen y sustento de la vida. <br><br>

(Coro) <br>
Siento orgullo gritar: ¡Soy galanista! <br>
Defensor de las causas que nos unen, <br>
siento orgullo gritar:¡Soy galanista! <br>
El Galán es mi luz, ¡viva su lumbre! <br><br>

Autores: <br>
Letra: Pedro Sánchez Ruíz <br>
Música: Javier Manchego <br><br>

            </p>

<audio controls>
    <source src="images/galanhimno.mp3">
</audio>

        </div>
    </section>

    <!-- about section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="src/resources/js/custom.js"></script>

@endsection
