<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Delicious Handmade Cakes') | Cake Business</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- SEO & Icons -->
    <meta name="description" content="Handcrafted cakes for every celebration. Freshly baked, custom designs, same-day delivery.">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container nav-container">
            <a href="{{ route('home') }}" class="brand">Deal Basket Online</a>
            
            <div class="mobile-toggle">
                <span>&#9776;</span>
            </div>

            <div class="nav-links">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('products.index') }}" class="nav-link">Our Cakes</a>
                <a href="{{ route('custom-order') }}" class="nav-link">Custom Order</a>
                <a href="{{ route('about') }}" class="nav-link">About Us</a>
                <a href="{{ route('custom-order') }}" class="btn btn-primary">Order Now</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} All rights reserved by <a href="https://webseainfo.com/" target="_blank" style="text-decoration: underline;">Webseainfo</a>.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Simple Mobile Menu Toggle
        document.querySelector('.mobile-toggle').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>
</body>
</html>
