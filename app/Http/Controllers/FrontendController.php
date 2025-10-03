<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\Policy;
use App\Models\Service;
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

    public function services()
    {
        // Fetch active blogs with pagination (5 per page)
        $blogLists = Blog::where('is_active', 1)->latest('id')->paginate(5);

        return view('layouts.pages.services', compact('blogLists'));
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

    public function blogIndex()
    {
        // Fetch active blogs with pagination (5 per page)
        $blogLists = Blog::where('is_active', 1)->latest('id')->paginate(5);

        return view('layouts.pages.blogs', compact('blogLists'));
    }

    public function blogDetails($slug)
    {
        // Fetch the blog by slug, ensure it's active
        $blog = Blog::where('slug', $slug)->where('is_active', 1)->firstOrFail();

        // Optional: fetch recent blogs for sidebar
        $recentBlogs = Blog::where('is_active', 1)
            ->latest('id')
            ->take(5)
            ->get();

        return view('layouts.pages.singleBlog', compact('blog', 'recentBlogs'));
    }

    public function policyDetails($slug)
    {
        // Fetch the blog by slug, ensure it's active
        $policy = Policy::where('slug', $slug)->where('is_active', 1)->firstOrFail();

        return view('layouts.pages.singlePolicy', compact('policy'));
    }

    public function serviceDetails($slug)
    {
        // Fetch the blog by slug, ensure it's active
        $blog = Service::where('slug', $slug)->where('is_active', 1)->firstOrFail();

        // Optional: fetch recent blogs for sidebar
        $recentBlogs = Service::where('is_active', 1)
            ->latest('id')
            ->get();

        return view('layouts.pages.singleService', compact('blog', 'recentBlogs'));
    }

}
