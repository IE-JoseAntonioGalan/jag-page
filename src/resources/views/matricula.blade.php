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

        <div class="contenedor-imagenes">
        <img src="images/matricula1.jpeg" width="50%" height="50%"> 
        <img src="images/matricula2.jpeg" width="50%" height="50%">
        </div>

        <div class="contenedor-imagenes">
        <img src="images/matricula3.jpeg" width="50%" height="50%"> 
        <img src="images/matricula4.jpeg" width="50%" height="50%">
        </div>

   </section>

<!-- matriculas section ends -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="src/resources/js/custom.js"></script>
@endsection