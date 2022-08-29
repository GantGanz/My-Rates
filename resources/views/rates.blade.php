@extends('layouts.main')

@section('container')    

    @foreach ($rates as $rate)
    <article class="mb-5">
        <a href="/rates/{{ $rate["slug"] }}">
            <h2>{{ $rate["title"] }}</h2>
        </a>
        <h3>By : {{ $rate["author"] }}</h2>
        <h5>{{ $rate["body"] }}</h2>
    </article>
    @endforeach

@endsection