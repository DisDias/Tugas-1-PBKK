@extends('template')

@section('container')
<h1>Post Categories</h1> 
<hr/>

@foreach ($categories as $category)
    <ul>
        <li>
            <h3><a href="/categories/{{ $category->slug }}" class="text-decoration-none">
            {{ $category->name }}
            </a></h3>
        </li>
    </ul>
@endforeach

@endsection