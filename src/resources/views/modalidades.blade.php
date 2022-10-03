@extends('layout')

@section('page', 'Modalidades')

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

<!-- software section starts  -->

   <section class="heading-link">
        <h3>PROGRAMACIÓN DE SOFTWARE</h3> 
   </section>

   <section class="about">

        <div class="contenedor-imagenes">
        <img src="images/soft1.JPG" width="50%" height="50%"> 
        <img src="images/soft2.jpeg" width="50%" height="50%">
        </div>

        <iframe  style="margin: 0 auto;" src="images/software.pdf" width="80%" height="500px" ></iframe>
        

   </section>

<!-- software section ends -->

<!-- multimedia section starts  -->

   <section class="heading-link">
        <h3>DISEÑO E INTEGRACIÓN DE MULTIMEDIA</h3> 
   </section>

   <section class="about">

        <div class="contenedor-imagenes">
        <img src="images/mul1.jpg" width="50%" height="50%"> 
        <img src="images/mul2.jpg" width="50%" height="50%">
        </div>

        <div class="contenedor-imagenes">
        <img src="images/mul3.jpeg" width="50%" height="50%"> 
        <img src="images/mul4.jpeg" width="50%" height="50%">
        </div>


        <iframe  style="margin: 0 auto;" src="images/multimedia.pdf" width="80%" height="500px" ></iframe>
        

   </section>

<!-- multimedia section ends -->

<!-- contabilidad section starts  -->

   <section class="heading-link">
        <h3>CONTABILIZACIÓN DE OPERACIONES COMERCIALES Y FINANCIERAS</h3> 
   </section>

   <section class="about">

        <div class="contenedor-imagenes">
        <img src="images/conta1.jpg" width="50%" height="50%"> 
        <img src="images/conta2.jpg" width="50%" height="50%">
        </div>

        <div class="contenedor-imagenes">
        <img src="images/conta3.jpg" width="50%" height="50%"> 
        <img src="images/conta4.jpg" width="50%" height="50%">
        </div>


        <iframe  style="margin: 0 auto;" src="images/contabilidad.pdf" width="80%" height="500px" ></iframe>
        

   </section>

<!-- contabilidad section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="src/resources/js/custom.js"></script>
@endsection