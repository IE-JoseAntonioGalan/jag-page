@extends('layout')

@section('page', 'Modalidades')

@section('content')
    <section class="heading-link">
   <h3>Modalidades de la Institución</h3>
   <p> <a href="/">Inicio</a> / Modalidades </p>
</section>

<!-- Custom Styles -->
<style>
    .contenedor-imagenes {
  display: flex;
}

.contenedor-imagenes img:first-child {
  margin-right: 10px;
}
</style>

<!-- software section starts  -->

   <section class="heading-link">
        <h3>PROGRAMACIÓN DE SOFTWARE</h3> 
   </section>

   <section class="about">

        <div class="contenedor-imagenes">
        <img src="images/11-2.JPG" width="50%" height="50%"> 
        <img src="images/10-2.jpeg" width="50%" height="50%">
        </div>

        <iframe src="images/software.pdf" width="100%" height="500px"></iframe>
        </div>

   </section>

<!-- software section ends -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="src/resources/js/custom.js"></script>
@endsection