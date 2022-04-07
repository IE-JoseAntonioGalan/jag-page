<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Jose Antonio Galan - @yield('page')</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid px-5 w-100">
                <!-- Navbar brand -->
                <a class="navbar-brand" href="/">
                    JAG
                </a>
                <div class="collapse navbar-collapse d-flex justify-content-end">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('News') }}">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Project') }}"">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Event') }}"">Eventos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Navbar -->
        @yield('banner')

    </header>

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
