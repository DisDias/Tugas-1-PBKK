@extends('template')

@section('container')
<h1 class mb-5 >{{ $title }}</h1> 
{{-- <h6>editor : {{ $name }} | {{ $email }} </h6>  --}}
<hr/>

@foreach ($posts as $post)
    <article class ="mb-5 border-bottom pb-4">
        <h3>
            <a href="/post/{{ $post->slug }}" class="text-decoration-none">
            {{ $post->title }}
            </a>
        </h3>
        <h6>By: <a href="/authors/{{ $post->user->username }}" class="text-decoration-none"> {{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></h6> 
        <p> {{ $post->excerpt }} </p>
        <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
    </article>
@endforeach

@endsection