<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        ContactSubmission::create($validated);

        $phone = '6282395928309'; // User's WhatsApp number
        $text = "Halo Little Kenzy, saya tertarik dengan layanan Anda.\n\n" .
                "Nama: {$validated['name']}\n" .
                "Email: {$validated['email']}\n" .
                "No. HP: {$validated['phone']}\n" .
                "Pesan: {$validated['message']}";
        
        $whatsappUrl = "https://wa.me/{$phone}?text=" . urlencode($text);

        return redirect()->away($whatsappUrl);
    }
}
