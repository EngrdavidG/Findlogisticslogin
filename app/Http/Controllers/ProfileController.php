<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Fetch the authenticated user's information
        $user = auth()->user();

        // Return the profile view with user data
        return view('profile', ['user' => $user]);
    }
}
