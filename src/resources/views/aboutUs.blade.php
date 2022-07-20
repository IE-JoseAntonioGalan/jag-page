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
        <h3>Organigrama</h3>
    </section>

    <!-- about section starts  -->

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

@endsection
