@extends('layout')

@section('page', $data->title)

@section('content')
    <div class=" w-100" style="height: 20rem">
        <img src="{{ $data->url_path }}" alt="{{ $data->title }}" class="img-fluid h-100 w-100" style="object-fit: cover">
    </div>
    <main class="px-4 pb-2">
        <h2 class="my-3">{{ $data->title }}</h2>
        <div class="mb-2">{!! $data->content !!}</div>
        <a class="text-muted text-decoration-none" href="{{ route($base_url) }}">🡐 Volver</a>
    </main>
@endsection
