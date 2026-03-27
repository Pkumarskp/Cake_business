<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomRequest;

class CustomOrderController extends Controller
{
    public function index()
    {
        return view('custom-order');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'occasion' => 'nullable|string|max:255',
            'flavor' => 'nullable|string|max:255',
            'weight' => 'nullable|numeric',
            'message' => 'nullable|string',
            'details' => 'nullable|string',
        ]);

        CustomRequest::create([
            'name' => $validated['name'],
            'contact' => $validated['contact'],
            'occasion' => $validated['occasion'],
            'flavor' => $validated['flavor'],
            'weight' => $validated['weight'] ? (string)$validated['weight'] : null,
            'message' => $validated['message'] . ($validated['details'] ? "\nDetails: " . $validated['details'] : ''),
            'status' => 'pending',
        ]);

        return redirect()->route('home')->with('success', 'Your custom cake request has been submitted! We will contact you soon.');
    }
}
