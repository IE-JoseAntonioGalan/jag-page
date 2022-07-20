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

    <!-- about section ends -->

@endsection
