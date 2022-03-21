@extends('template')

@section('container')
<h1>Post Authors</h1> 
<hr/>

@foreach ($users as $user)
    <ul>
        <li>
            <h3><a href="/authors/{{ $user->name }}" class="text-decoration-none">
            {{ $user->name }}
            </a></h3>
        </li>
    </ul>
@endforeach

@endsection