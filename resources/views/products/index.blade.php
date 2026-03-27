@extends('layouts.app')

@section('title', 'Our Delicious Cakes')

@section('content')
<div class="container" style="padding-top: var(--spacing-xl); padding-bottom: var(--spacing-lg);">
    <h1 class="section-title fade-in">Our Cakes</h1>
    
    <div class="cake-grid">
        @for ($i = 1; $i <= 41; $i++)
        <div class="cake-card fade-in delay-1">
            <img src="{{ asset('images/image' . $i . '.jpeg') }}" alt="Cake {{ $i }}" class="cake-img">
            <div class="cake-info">
                <h3 class="cake-name">Delicious Cake {{ $i }}</h3>
                <!-- Price hidden -->
                <div style="display: flex; gap: 10px; justify-content: center; margin-top: 10px;">
                    <a href="{{ route('products.show', ['id' => $i]) }}" class="btn btn-secondary" style="padding: 8px 16px; font-size: 0.9rem;">View</a>
                    <a href="https://wa.me/917818878784?text=I%20would%20like%20to%20order%20the%20Delicious%20Cake%20{{ $i }}" target="_blank" class="btn btn-primary" style="padding: 8px 16px; font-size: 0.9rem;">Order</a>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
