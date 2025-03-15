@extends('layout')

@section('title', 'Services')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-6">My Services</h1>
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
            <ul class="list-none space-y-4">
                <li class="flex items-center text-xl">
                    <span class="text-green-500 text-2xl mr-4">✔️</span>
                    Custom Web Application Development
                </li>
                <li class="flex items-center text-xl">
                    <span class="text-green-500 text-2xl mr-4">✔️</span>
                    Laravel API Development
                </li>
                <li class="flex items-center text-xl">
                    <span class="text-green-500 text-2xl mr-4">✔️</span>
                    Frontend Design with Bootstrap & Tailwind CSS
                </li>
                <li class="flex items-center text-xl">
                    <span class="text-green-500 text-2xl mr-4">✔️</span>
                    Database Design & Optimization
                </li>
            </ul>
        </div>
    </div>
@endsection
