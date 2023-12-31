<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class LoginController extends Controller
{
    public function index(): Response
    {

        return Inertia::render('Auth/Login');

    }

    public function login(LoginRequest $request): RedirectResponse
    {

        // validate email and password through LoginRequest
        $validated = $request->validated();

        // // check if user exists
        if (Auth::attempt($validated, $request->only('remember_me'))) {

            // Generate session
            $request->session()->regenerate();

            //     // redirect to platform`s dashboard page
            return redirect()->intended('/dashboard');
        }

        // // If user does not exist
        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ]);

    }

    public function logout(Request $request): RedirectResponse
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }
}
