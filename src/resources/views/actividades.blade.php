@extends('layout')

@section('page', 'Actividades')

@section('content')
    <section class="heading-link">
   <h3>Actividades de la Institución</h3>
   <p> <a href="/">Inicio</a> / Actividades </p>
</section>

<section class="courses">

   <h1 class="heading"> Todas las Actividades </h1>

   <div class="box-container">

      <div class="box">
         <div class="content">
            <h3>Teatro</h3>
            <iframe src="images/teatro.pdf" width="100%" height="500px"></iframe>
            <div class="icons">
            </div>
         </div>
      </div>



   </div>

<br>



   </div>

</section>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="src/resources/js/custom.js"></script>
@endsection