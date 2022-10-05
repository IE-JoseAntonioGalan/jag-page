@extends('layout')

@section('page', 'Historia JAG')

@section('content')

<!-- video section -->

<section class="heading-link">
       <h3>Video - Historia Institución Educativa José Antonio Galán</h3>
</section>

<section class="about">

<video style="margin: 0 auto;" src="images/historiajag.mp4" width="100%" height="100%" controls></video>

</section>

<!-- video section -->

<!-- documento section -->

<section class="heading-link">
       <h3>Documento - Historia Institución Educativa José Antonio Galán</h3>
</section>

<section class="about">

<iframe style="margin: 0 auto;" src="images/documentojag.pdf" width="80%" height="500px" ></iframe>

</section>

<!-- documento section -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="src/resources/js/custom.js"></script>
@endsection