@extends('layout')

@section('page', 'Galeria')

@section('content')

<!-- Custom Styles -->
<style>
    .contenedor-imagenes {
  display: flex;
}

.contenedor-imagenes img:first-child {
  margin-right: 10px;
}

</style>
<!-- Custom Styles -->

    <section class="heading-link">
   <h3>Galeria Institucional</h3>
   <p> <a href="/">Inicio</a> / Galeria </p>
</section>

<section class="about">

        <div class="contenedor-imagenes">
        <img src="images/galeria1.png" width="50%" height="50%"> 
        <img src="images/galeria4.JPG" width="50%" height="50%">
        </div>

        <div class="contenedor-imagenes">
        <img src="images/galeria5.JPG" width="50%" height="50%"> 
        <img src="images/galeria6.JPG" width="50%" height="50%">
        </div>

        <div class="contenedor-imagenes">
        <img src="images/galeria8.JPG" width="50%" height="50%"> 
        <img src="images/galeria10.JPG" width="50%" height="50%">
        </div>

        <div class="contenedor-imagenes">
        <img src="images/galeria11.JPG" width="50%" height="50%"> 
        <img src="images/galeria14.jpeg" width="50%" height="50%">
        </div>

        <div class="contenedor-imagenes">
        <img src="images/galeria2.JPG" width="50%" height="50%"> 
        <img src="images/galeria3.JPG" width="50%" height="50%">
        </div>

        <div class="contenedor-imagenes">
        <img src="images/galeria7.JPG" width="50%" height="50%"> 
        <img src="images/galeria9.JPG" width="50%" height="50%">
        </div>

        <div class="contenedor-imagenes">
        <img src="images/galeria12.JPG" width="50%" height="50%"> 
        <img src="images/galeria13.JPG" width="50%" height="50%">
        </div>

   </section>


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="src/resources/js/custom.js"></script>
@endsection