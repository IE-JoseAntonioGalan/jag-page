@extends('layout')

@section('page', 'Matriculas')

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

<!-- matriculas section starts  -->

   <section class="heading-link">
        <h3>Cronograma Matriculas - Año 2023 J.A.G</h3> 
   </section>

   <section class="about">

        <iframe  style="margin: 0 auto;" src="images/comunicado.pdf" width="100%" height="500px" ></iframe>

   </section>

<!-- matriculas section ends -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="src/resources/js/custom.js"></script>
@endsection