@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>My Recent Projects</h1>
    <div class="portfolio-grid">
        <div class="portfolio-item">
            <h3>📌 E-commerce Website</h3>
            <p>A full-fledged e-commerce platform built with Laravel and Vue.js.</p>
        </div>
        <div class="portfolio-item">
            <h3>📌 Blog Management System</h3>
            <p>A blog system with admin panel for managing posts and categories.</p>
        </div>
        <div class="portfolio-item">
            <h3>📌 Online Course Platform</h3>
            <p>An LMS system allowing students to enroll in online courses.</p>
        </div>
    </div>
@endsection
