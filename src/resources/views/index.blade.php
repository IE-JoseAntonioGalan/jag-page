@extends('layout')

@section('banner')
    <div id="intro" class="p-5 text-center bg-success text-white">
        <h1 class="mb-3 h2">{{ $site_data->school_name }}</h1>
        <p class="mb-3">Al margen de la educacón</p>
    </div>
@endsection
@section('content')
    <section class="mx-5">
        <article class="text-center">
            <h2>Misión</h2>
            <p>{{ $site_data->mission }}</p>
        </article>
        <article class="text-center">
            <h2>Visión</h2>
            <p>{{ $site_data->vision }}</p>
        </article>
        <article class="text-center">
            <h2>Valores</h2>
            <p class="text-start">{{ $site_data->values }}</p>
        </article>
    </section>
@endsection
