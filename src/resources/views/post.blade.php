@extends('layout')

@section('page', $data->title)

@section('content')
    <div class=" w-100" style="height: 50rem">
        <img src="{{ $data->url_path }}" alt="{{ $data->title }}" class="img-fluid h-100 w-100"
            style="object-fit: cover">
    </div>
    <div class="container">
        <main class="px-4 pb-2">
            <h2 class="my-3 fs-1 text-center fw-bold">{{ $data->title }}</h2>
            <div class="mb-2 fs-4">{!! $data->content !!}</div>
            <a class="text-muted text-decoration-none fs-4" href="{{ route($base_url) }}">← Volver</a>
        </main>
    </div>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="src/resources/js/custom.js"></script>
@endsection
