<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Store a newly created inquiry in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'company_name' => ['nullable', 'string', 'max:255'],
            'country' => ['nullable', 'string', 'max:100'],
            'inquiry_type' => ['nullable', 'string', 'max:50'],
            'product_category' => ['nullable', 'string', 'max:100'],
            'target_quantity' => ['nullable', 'string', 'max:100'],
            'target_delivery_date' => ['nullable', 'string', 'max:100'],
            'payment_terms' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $validated['ip_address'] = $request->ip();
        $validated['status'] = 'new';
        $validated['inquiry_type'] = $validated['inquiry_type'] ?? 'rfq';

        Inquiry::create($validated);

        return back()->with('success', 'Thank you for contacting Texora Sourcing. Your inquiry has been received! Our merchandising team will review your requirements and respond within 24 hours.');
    }
}
