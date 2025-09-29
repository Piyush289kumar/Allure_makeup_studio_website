<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('layouts.pages.home');
    }

    public function about()
    {
        return view('layouts.pages.about');
    }

    public function contact()
    {
        return view('layouts.pages.contactus');
    }

    public function contactstore(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $validated['ip_address'] = $request->ip();
        $validated['is_resolved'] = false;

        ContactUs::create($validated);

        return redirect()->back()->with('success', 'Thank you! Your message has been sent.');
    }

}
