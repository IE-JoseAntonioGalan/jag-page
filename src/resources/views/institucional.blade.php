@extends('layout')

@section('page', 'Proyectos')

@section('content')
    <section class="heading-link">
   <h3>Proyectos de la Institución</h3>
   <p> <a href="/">Inicio</a> / Proyectos </p>
</section>

<section class="courses">

   <h1 class="heading"> Todas los Proyectos </h1>

   <div class="box-container">

      <div class="box">
         <div class="content">
            <h3>Proyecto Democracia</h3>
            <iframe src="images/pdemo.pdf" width="100%" height="500px"></iframe>
            <div class="icons">
            </div>
         </div>
      </div>

      <div class="box">
         <div class="content">
            <h3>Proyecto Deportes</h3>
            <iframe src="images/pdepo.pdf" width="100%" height="500px"></iframe>
            <div class="icons">
            </div>
         </div>
      </div>

   </div>

<br>

   <div class="box-container">

      <div class="box">
         <div class="content">
            <h3>Proyecto Padres</h3>
            <iframe src="images/ppadr.pdf" width="100%" height="500px"></iframe>
            <div class="icons">
            </div>
         </div>
      </div>

      

   </div>

</section>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="src/resources/js/custom.js"></script>
@endsection