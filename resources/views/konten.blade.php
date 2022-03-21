@extends('template')

@section('container')
<article class="mb-5">
    <h3>{{ $post->title }}                   
    </h3>
    <h6>By: <a href="/authors/{{ $post->user->username }}" class="text-decoration-none"> {{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></h6> 
    <br><p>{!! $post->body !!}</p>
</article>

@endsection
