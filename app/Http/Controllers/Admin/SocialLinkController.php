<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function index()
    {
        return view('admin.social-link.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'link' => 'required|url|max:255',
        ]);

        SocialLink::create($validated);
        return redirect()->back()->with('success', 'Social link added successfully.');
    }
}
