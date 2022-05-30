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

    <title>Jose Antonio Galan - @yield('page')</title>
</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="" class="logo"> <i class=""></i> JAG </a>

        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="/">Inicio</a>
            <a href="{{ Route('News') }}">Noticias</a>
            <a href="{{ Route('Event') }}">Eventos</a>
            <a href="{{ Route('Project') }}">Proyectos</a>
        </nav>

        <div class="icons">
            <div id="account-btn" class=""></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    </header>

    <div class="account-form">

        <div id="close-form" class="fas fa-times"></div>

        <div class="buttons">
            <span class="btn active login-btn"></span>
            <span class="btn register-btn"></span>
        </div>

    </div>

    <!-- header section ends -->

    @yield('content')

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3> <i class=""></i> JAG </h3>
                <p>Contamos con una variedad de Redes Sociales, en estas se pueden comunicar con nosotros.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>Panel Link</h3>
                <a href="/" class="link">Inicio</a>
                <a href="{{ Route('News') }}" class="link">Noticias</a>
                <a href="{{ Route('Event') }}" class="link">Eventos</a>
                <a href="{{ Route('Project') }}" class="link">Proyectos</a>
            </div>

            <div class="box">
                <h3>Ubicación</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1701.8400922664268!2d-73.49051790529428!3d4.27239668756965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3fd5be157e7aa1%3A0x477d8443aa0b1f54!2sColegio%20Jos%C3%A9%20Antonio%20Gal%C3%A1n!5e1!3m2!1ses!2sco!4v1652741482701!5m2!1ses!2sco"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

        <div class="credit"> Manejo y Diseño Web <span>Programación de Software 11-2 JM</span> | © 2022
            Copyright - José Antonio Galan </div>

    </section>

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
