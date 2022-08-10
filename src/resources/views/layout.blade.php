<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>José Antonio Galán - @yield('page')</title>
    <link rel="shortcut icon" href="images/escudo.png">

</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62e442b454f06e12d88bfb9b/1g95q94ld';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="/" class="logo"> <i class="fas fa-graduation-cap"> JAG </i>  </a>

        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="/">Inicio</a>
            <a href="{{ Route('News') }}">Noticias</a>
            <a href="{{ Route('Event') }}">Actividades</a>
            <a href="{{ Route('institucional') }}">Proyectos</a>
        </nav>

        <div class="icons">
            <div id="account-btn" class="fas fa-user"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    </header>

    <div class="account-form">

        <div id="close-form" class="fas fa-times"></div>

        <div class="buttons">
            <span class="btn active login-btn">Ingresar</span>
            <span class="btn register-btn">Registrar</span>
        </div>

        <form class="login-form active" action="">
      <h3>Iniciar sesión</h3>
      <input type="email" placeholder="Correo electrónico" class="box">
      <input type="password" placeholder="Contraseña" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">Recordar</label>
         <a href="#">¿Olvidó su contraseña?</a>
      </div>
      <input type="submit" value="Ingresar" class="btn">
   </form>

   <form class="register-form" action="">
      <h3>Registrarte</h3>
      <input type="name" placeholder="Nombre y Apellido" class="box">
      <input type="email" placeholder="Correo electrónico" class="box">
      <input type="password" placeholder="Contraseña nueva" class="box">
      <input type="submit" value="Registrar" class="btn">
   </form>

    </div>



    <!-- header section ends -->

    @yield('content')

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3> <i class="fas fa-school"> IE JAG </i></h3>
                <p>Contamos con una variedad de Redes Sociales, en estas se pueden comunicar con nosotros.</p>
                <div class="share">
                    <a href="https://es-la.facebook.com/GalanistasCumaral/" class="fab fa-facebook-f"></a>
                    <a href="https://talentogalanista.blogspot.com/" class="fab fa-blogger"></a>
                    <a href="https://www.instagram.com/joseantonio_galan1967" class="fab fa-instagram"></a>
                </div>
            </div>

            <div class="box">
                <h3> <i class="fas fa-ghost"> Panel Link </i></h3>
                <a href="/" class="link">Inicio</a>
                <a href="{{ Route('News') }}" class="link">Noticias</a>
                <a href="{{ Route('Event') }}" class="link">Actividades</a>
                <a href="{{ Route('Project') }}" class="link">Proyectos</a>
            </div>

            <div class="box">
                <h3> <i class="fas fa-check"> Ubicación </i></h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1701.8400922664268!2d-73.49051790529428!3d4.27239668756965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3fd5be157e7aa1%3A0x477d8443aa0b1f54!2sColegio%20Jos%C3%A9%20Antonio%20Gal%C3%A1n!5e1!3m2!1ses!2sco!4v1652741482701!5m2!1ses!2sco"
                    width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

        <div class="credit"> Manejo y Diseño Web <span>Programación de Software 11-2 JM</span> | © 2022
            Copyright - José Antonio Galán </div>

    </section>

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
