@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container" style="padding-top: 150px; padding-bottom: var(--spacing-lg);">
    
    <!-- Hero Story -->
    <div class="about-hero fade-in">
        <div class="about-text">
            <h5 style="color: var(--color-brown-light); text-transform: uppercase; letter-spacing: 2px; font-weight: 600; margin-bottom: 10px;">Our Story</h5>
            <h1>Baking Memories Since 2015</h1>
            <p>
                What started as a small kitchen experiment for a family birthday has blossomed into <b>Deal Basket Online</b>. 
                We believe that a cake isn't just a dessert—it's the centerpiece of your celebration, a slice of joy, and a memory in the making.
            </p>
            <p>
                Every layer is baked with love, using only the finest ingredients: real butter, Belgian chocolate, and premium eggless alternatives. 
                No shortcuts, no preservatives—just pure, homemade goodness.
            </p>
            <img src="{{ asset('images/image2.jpeg') }}" style="width: 100px; border-radius: 50%; margin-top: 20px;" alt="Signature">
            <p style="font-size: 0.9rem; margin-top: 5px; font-weight: 600;">Jane Doe, Founder</p>
        </div>
        <div class="about-img-wrapper fade-in delay-1">
            <img src="{{ asset('images/image5.jpeg') }}" alt="Our Kitchen">
        </div>
    </div>

    <!-- Stats / Trust -->
    <div style="background: var(--color-cream-dark); padding: var(--spacing-lg) var(--spacing-md); border-radius: var(--radius-lg); margin-bottom: var(--spacing-xl); text-align: center;" class="fade-in delay-2">
        <div style="display: flex; justify-content: space-around; flex-wrap: wrap; gap: var(--spacing-md);">
            <div>
                <h2 style="font-size: 2.5rem; margin-bottom: 0;">5000+</h2>
                <p>Cakes Baked</p>
            </div>
            <div>
                <h2 style="font-size: 2.5rem; margin-bottom: 0;">1200+</h2>
                <p>Happy Customers</p>
            </div>
            <div>
                <h2 style="font-size: 2.5rem; margin-bottom: 0;">100%</h2>
                <p>Fresh Ingredients</p>
            </div>
        </div>
    </div>

    <!-- Values Grid -->
    <h2 class="section-title text-center">Why We Are Different</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: var(--spacing-md); margin-top: var(--spacing-md);">
        <div class="testimonial-card fade-in">
            <div style="font-size: 2.5rem; margin-bottom: 15px;">🧈</div>
            <h3>Pure Butter</h3>
            <p style="color: var(--color-text-muted);">We never use margarine or oil substitutes. Only 100% pure creamy butter.</p>
        </div>
        <div class="testimonial-card fade-in delay-1">
            <div style="font-size: 2.5rem; margin-bottom: 15px;">🌿</div>
            <h3>100% Eggless</h3>
            <p style="color: var(--color-text-muted);">Pure vegetarian delight. Soft, moist, and fluffy without a single egg.</p>
        </div>
        <div class="testimonial-card fade-in delay-2">
            <div style="font-size: 2.5rem; margin-bottom: 15px;">🎨</div>
            <h3>Custom Artistry</h3>
            <p style="color: var(--color-text-muted);">If you can dream it, we can design it. Every cake is a unique masterpiece.</p>
        </div>
    </div>

</div>
@endsection
