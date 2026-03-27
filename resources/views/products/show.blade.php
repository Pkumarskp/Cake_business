@extends('layouts.app')

@section('title', 'Cake Details')

@section('content')
<div class="container" style="padding-top: var(--spacing-xl); padding-bottom: var(--spacing-lg);">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: var(--spacing-lg); align-items: start;">
        <!-- Image Section -->
        <div class="fade-in">
            <img src="{{ asset('images/image' . $id . '.jpeg') }}" alt="Cake Details" style="width: 100%; border-radius: var(--radius-md); box-shadow: var(--shadow-md);">
        </div>

        <!-- Details Section -->
        <div class="fade-in delay-1">
            <h1 style="font-size: 2.5rem; margin-bottom: var(--spacing-xs);">Delicious Cake {{ $id }}</h1>
            <p style="font-size: 1.5rem; color: var(--color-brown); font-weight: 600; margin-bottom: var(--spacing-md);">Price: On Request</p>
            
            <p style="margin-bottom: var(--spacing-md); color: var(--color-text-muted);">
                A moist, rich cake layered with our signature buttercream frosting. Perfect for birthdays, anniversaries, or just because you deserve a treat. Made with premium ingredients and lots of love.
            </p>

            <div style="margin-bottom: var(--spacing-md);">
                <strong>Flavor options:</strong> Chocolate, Vanilla, Red Velvet, Strawberry
            </div>

            <div style="display: flex; gap: var(--spacing-sm); flex-wrap: wrap;">
                <a href="https://wa.me/917818878784?text=I%20would%20like%20to%20order%20the%20Delicious%20Cake%20{{ $id }}" target="_blank" class="btn btn-primary">Order via WhatsApp</a>
                <a href="{{ route('custom-order') }}" class="btn btn-secondary">Request Customization</a>
            </div>
        </div>
    </div>
</div>
@endsection
