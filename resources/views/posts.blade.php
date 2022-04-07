@extends('layout')

@section('page', $route_name)

@section('content')
    <div class="fs-1 mx-4 mb-2">Todas las publicaciones</div>
    <div class="row card-deck px-4">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-4" style="height: 40rem">
                <div class="card h-100 shadow">
                    <img class="card-img-top h-50" src="{{ $post->url_path }}" alt="{{ $post->title }}">
                    <div class="card-body h-100 d-flex flex-column justify-content-between">
                        <h2 class="card-title fs-4"><strong>{{ $post->title }}</strong></h2>
                        <p class="card-text">{{ substr($post->content, 0, 300) }}...</p>
                        <a class="btn btn-primary" href="{{ route($route_name.'_see', $post->id) }}">Ver mas ➤</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection