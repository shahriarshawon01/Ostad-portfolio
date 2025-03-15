<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | My Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- Header Section -->
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
                    <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <h2>SR. Shawon</h2>
                    <p>Laravel & Vue.js Developer</p>
                    <p>Experienced in building scalable web applications, API development, and frontend integration.</p>
                </div>
                <div class="footer-contact">
                    <p>📧 Email: <a href="mailto:shahriar@gmail.com">shahriar@gmail.com</a></p>
                    <p>🌐 Website: <a href="https://github.com" target="_blank">GitHub Profile</a></p>
                </div>
            </div>
            <p class="copyright">&copy; {{ date('Y') }} My Portfolio. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
