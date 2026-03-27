@extends('layouts.app')

@section('title', 'Design Your Own Cake')

@section('content')
<div class="container" style="padding-top: var(--spacing-xl); padding-bottom: var(--spacing-lg);">
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 class="section-title fade-in">Design Your Dream Cake</h1>
        <p class="text-center mb-3 fade-in delay-1" style="color: var(--color-text-muted);">Tell us what you have in mind, and we'll bring it to life.</p>

        <form action="{{ route('custom-order.store') }}" method="POST" style="background: var(--color-white); padding: var(--spacing-md); border-radius: var(--radius-md); box-shadow: var(--shadow-sm);" class="fade-in delay-2">
            @csrf
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-sm);">
                <div class="mb-1">
                    <label for="name" style="display: block; margin-bottom: 5px; font-weight: 600;">Your Name</label>
                    <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: var(--radius-sm);">
                </div>
                <div class="mb-1">
                    <label for="contact" style="display: block; margin-bottom: 5px; font-weight: 600;">Phone Number</label>
                    <input type="text" id="contact" name="contact" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: var(--radius-sm);">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-sm);">
                <div class="mb-1">
                    <label for="occasion" style="display: block; margin-bottom: 5px; font-weight: 600;">Occasion</label>
                    <select id="occasion" name="occasion" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: var(--radius-sm);">
                        <option>Birthday</option>
                        <option>Anniversary</option>
                        <option>Wedding</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="mb-1">
                    <label for="flavor" style="display: block; margin-bottom: 5px; font-weight: 600;">Preferred Flavor</label>
                    <input type="text" id="flavor" name="flavor" placeholder="e.g. Chocolate, Vanilla" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: var(--radius-sm);">
                </div>
            </div>

            <div class="mb-1">
                <label for="weight" style="display: block; margin-bottom: 5px; font-weight: 600;">Approx. Weight (kg)</label>
                <input type="number" id="weight" name="weight" step="0.5" min="0.5" value="1" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: var(--radius-sm);">
            </div>

            <div class="mb-1">
                <label for="message" style="display: block; margin-bottom: 5px; font-weight: 600;">Message on Cake</label>
                <input type="text" id="message" name="message" placeholder="e.g. Happy Birthday John" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: var(--radius-sm);">
            </div>

            <div class="mb-2">
                <label for="details" style="display: block; margin-bottom: 5px; font-weight: 600;">Additional Details / Design Request</label>
                <textarea id="details" name="details" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: var(--radius-sm);"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%;">Request Quote</button>
        </form>
    </div>
</div>
@endsection
