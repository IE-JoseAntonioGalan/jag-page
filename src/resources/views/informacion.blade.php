@extends('layout')

@section('page', 'Informacion')

@section('content')

<!-- info section starts  -->

<section class="contact">

   <h1 class="heading"> Dudas, sugerencias o inquietudes </h1>


   <div class="row">

      <div class="image">
         <img src="images/dudas1.png" alt="">
      </div>

      <form action="">
         <h3>Mensaje</h3>
         <input type="text" placeholder="Nombre y Apellido" class="box">
         <input type="email" placeholder="Correo" class="box">
         <input type="number" placeholder="Telefono" class="box">
         <textarea name="" class="box" placeholder="Escribir mensaje" id="" cols="30" rows="10"></textarea>
         <input type="submit" value="Enviar" class="btn">
      </form>

   </div>

</section>

<!-- info section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="src/resources/js/custom.js"></script>
@endsection
