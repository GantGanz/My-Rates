@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post["title"] }}</h2>
    <h3>By : {{ $post["author"] }}</h2>
    <h5>{{ $post["body"] }}</h2>
</article>        

<a href="/rates">Back to Rates</a>
@endsection