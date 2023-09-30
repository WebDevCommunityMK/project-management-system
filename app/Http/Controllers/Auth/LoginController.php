<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function index(){

        return Inertia::render('Auth/Login');

    }

    public function login(LoginRequest $request){

        // validate email and password through LoginRequest
        $validated = $request->validated();

        // check if user exists
        if (Auth::attempt($validated)) {

            // Generate session
            $request->session()->regenerate();
            
            // redirect to platform`s dashboard page
            return redirect()->intended('/dashboard');
        }
 
        // If user does not exist
        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ]);

    }
            
}
