<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisteredUserController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);
        $employerAttributes = $request->validate([
            'employer' => ['required'],
            'logo' => ['required']
        ]);

        $user = User::create($userAttributes);
        $logoPath =  $request->logo->store('logos');
        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath,
        ]);
        Auth::login($user);
        return redirect('/')->with('User Registered Successfully');
    }
}
