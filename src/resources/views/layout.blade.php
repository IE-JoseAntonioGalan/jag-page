<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
            <a href="index.html">Inicio</a>
            <a href="noticias.html">Noticias</a>
            <a href="eventos.html">Eventos</a>
            <a href="proyectos.html">Proyectos</a>
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

    <main class="py-3 bg-dark bg-opacity-10">
        <div class="container bg-white rounded px-0">
            @yield('content')
        </div>
    </main>

    <footer class="bg-white text-lg-start">
        <!-- Copyright -->
        <div class="border border-top-4 text-center p-3">
            © 2021 Copyright - Jose Antonio Galan
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>
