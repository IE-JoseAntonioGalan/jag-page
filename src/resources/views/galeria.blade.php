@extends('layout')

@section('page', 'Galeria')

@section('content')

    <section class="heading-link">
   <h3>Galeria Institucional</h3>
   <p> <a href="/">Inicio</a> / Galeria </p>
</section>

<section class="about">

<!-- Galeria Code -->
    
    <div style="margin: 0 auto;" id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>

      </div>

      <div class="carousel-inner">

        <div class="carousel-item active">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1000px" height="500px" src="images/galeria1.png" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#555"></rect></img>
        </div>

        <div class="carousel-item">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1000px" height="500px" src="images/galeria4.JPG" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#555"></rect></img>
        </div>

        <div class="carousel-item">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1000px" height="500px" src="images/galeria5.JPG" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#555"></rect></img>
        </div>

        <div class="carousel-item">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1000px" height="500px" src="images/galeria8.JPG" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#555"></rect></img>
        </div>

        <div class="carousel-item">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1000px" height="500px" src="images/galeria9.JPG" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#555"></rect></img>
        </div>

        <div class="carousel-item">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1000px" height="500px" src="images/galeria11.jpeg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#555"></rect></img>
        </div>

        <div class="carousel-item">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1000px" height="500px" src="images/galeria2.JPG" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#555"></rect></img>
        </div>

        <div class="carousel-item">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1000px" height="500px" src="images/galeria3.JPG" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#555"></rect></img>
        </div>

        <div class="carousel-item">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1000px" height="500px" src="images/galeria6.JPG" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#555"></rect></img>
        </div>

        <div class="carousel-item">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1000px" height="500px" src="images/galeria7.JPG" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#555"></rect></img>
        </div>

        <div class="carousel-item">
          <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1000px" height="500px" src="images/galeria10.JPG" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#555"></rect></img>
        </div>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>

 </div>



<!-- Galeria Code -->



</section>


<!-- link file link  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="src/resources/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection