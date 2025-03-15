@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact Me</h1>
    <p>Have a project idea? Let's discuss it!</p>
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
@endsection
