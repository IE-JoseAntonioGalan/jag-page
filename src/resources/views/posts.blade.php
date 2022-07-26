@extends('layout')

@section('page', $route_name)

@section('content')
    <!-- header section ends -->

    <section class="heading-link">
        <h3>{{ ucfirst(substr($_SERVER["REQUEST_URI"], 1)) }} de la Institución</h3>
        <p> <a href="/">Inicio</a> / {{ ucfirst(substr($_SERVER["REQUEST_URI"], 1)) }} </p>
    </section>

    <section class="courses">

        <h1 class="heading"> Todas Las Publicaciones </h1>

        <div class="box-container">

            @foreach ($posts as $post)
                <div class="box">
                    <div class="image">
                        <img src="{{ $post->url_path }}" alt="{{ $post->title }}">
                        
                    </div>
                    <div class="content">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr($post->content, 0, 300) }}...</p>
                        <a href="{{ route($route_name . '_see', $post->id) }}" class="btn">Leer Más</a>
                        <div class="icons">
                            <span> <i class="fas fa-book"></i> IE José Antonio Galán </span>
                            <span> <i class="fas fa-clock"></i> {{ explode(' ', $post->created_at)[0] }} </span>
                        </div>
                    </div>
                </div>
            @endforeach
    </section>
@endsection
