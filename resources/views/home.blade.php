@extends('layout')

@section('title', 'Home')

@section('content')
    <section class="hero">
        <h1>Welcome to My Portfolio</h1>
        <p>I'm a passionate Laravel Developer with expertise in backend development and frontend integration.</p>
        <a href="{{ url('/portfolio') }}" style="text-align: center">
            <button>View My Work</button>
        </a>
    </section>
@endsection
