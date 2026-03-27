@extends('layouts.app')

@section('title', 'Handcrafted Cakes for Every Celebration')

@section('content')

    <!-- Hero Section -->
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-slider">
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
        </div>
        <div class="container" style="position: relative; z-index: 2;">
            <div class="hero-content fade-in">
                <h1>Handcrafted Cakes for Every Celebration</h1>
                <p>Freshly baked • Custom designs • Ranges start from ₹300</p>
                <div class="hero-buttons">
                    <a href="{{ route('custom-order') }}" class="btn btn-primary">Order Now</a>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">View Cakes</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Cakes Section -->
    <section id="featured" class="featured">
        <div class="container">
            <h2 class="section-title fade-in">Our Bestsellers</h2>
            <div class="cake-grid">
                <!-- Static Placeholder Items - Will be dynamic later -->
                @for ($i = 1; $i <= 6; $i++)
                <div class="cake-card fade-in delay-1">
                    <img src="{{ asset('images/image' . $i + 12 . '.jpeg') }}" alt="Delicious Cake" class="cake-img">
                    <div class="cake-info">
                        <h3 class="cake-name">Premium Chocolate Truffle</h3>
                        <!-- Price removed -->
                        <a href="https://wa.me/917818878784?text=I%20would%20like%20to%20order%20the%20Delicious%20Cake%20{{ $i + 12 }}" target="_blank" class="btn btn-secondary" style="margin-top: 10px; font-size: 0.9rem; padding: 8px 16px;">Order Now</a>
                    </div>
                </div>
                @endfor
            </div>
            <div class="text-center" style="margin-top: var(--spacing-md)">
                <a href="{{ route('products.index') }}" class="btn btn-primary">View All Cakes</a>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="featured" style="background-color: var(--color-cream-dark);">
        <div class="container">
            <h2 class="section-title">How It Works</h2>
            <div style="display: flex; justify-content: center; gap: var(--spacing-lg); flex-wrap: wrap; text-align: center;">
                <div class="fade-in delay-1" style="max-width: 250px;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">🎂</div>
                    <h3>1. Choose Cake</h3>
                    <p>Select from our menu or request a custom design.</p>
                </div>
                <div class="fade-in delay-2" style="max-width: 250px;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">✍️</div>
                    <h3>2. Customize</h3>
                    <p>Pick flavor, size, and adding your personal message.</p>
                </div>
                <div class="fade-in delay-1" style="max-width: 250px;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">🚚</div>
                    <h3>3. Delivery</h3>
                    <p>We bake it fresh and deliver it to your doorstep.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="featured">
        <div class="container">
            <h2 class="section-title fade-in">What Our Customers Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card fade-in delay-1">
                    <p class="testimonial-text">"The most beautiful and delicious cake we've ever had! It made our wedding day perfect."</p>
                    <p class="testimonial-author">- Sarah & James</p>
                    <div style="color: gold; margin-top: 5px;">★★★★★</div>
                </div>
                <div class="testimonial-card fade-in delay-2">
                    <p class="testimonial-text">"Ordered a custom birthday cake last minute and they delivered perfection. Highly recommend!"</p>
                    <p class="testimonial-author">- Michael T.</p>
                    <div style="color: gold; margin-top: 5px;">★★★★★</div>
                </div>
                <div class="testimonial-card fade-in delay-1">
                    <p class="testimonial-text">"Not just a cake, but a work of art. The flavors were incredible, not too sweet, just right."</p>
                    <p class="testimonial-author">- Emma W.</p>
                    <div style="color: gold; margin-top: 5px;">★★★★★</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Infinite Image Marquee Showcase -->
    <section style="padding: var(--spacing-lg) 0;">
        <h2 class="section-title text-center fade-in" style="margin-bottom: var(--spacing-md);">Follow Us on Instagram</h2>
        <div class="marquee-wrapper">
            <div class="marquee-content">
                <!-- Duplicate the loop twice to ensure seamless scrolling -->
                @for ($j = 0; $j < 2; $j++)
                    @for ($i = 1; $i <= 20; $i++) 
                    <!-- Showing top 20 images for the slider to keep it light, or can do all -->
                    <div class="marquee-item">
                        <img src="{{ asset('images/image' . $i . '.jpeg') }}" alt="Gallery Item {{ $i }}">
                    </div>
                    @endfor
                @endfor
            </div>
        </div>
    </section>
    <section class="cta-section">
        <div class="container">
            <h2 class="section-title" style="margin-bottom: var(--spacing-sm); color: var(--color-white);">Every celebration deserves a perfect cake.</h2>
            <p class="mb-2" style="color: rgba(255,255,255,0.9);">Let us make your special moments even sweeter.</p>
            <a href="{{ route('custom-order') }}" class="btn btn-primary">Order Your Cake Today</a>
        </div>
    </section>

@endsection
