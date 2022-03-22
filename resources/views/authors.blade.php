@extends('template')

@section('container')
<h1>{{ $title }}</h1> 
<hr/>

@foreach ($users as $user)
    <ul>
        <li>
            <h3><a href="/authors/{{ $user->username }}" class="text-decoration-none">
            {{ $user->name }}
            </a></h3>
        </li>
    </ul>
@endforeach

@endsection