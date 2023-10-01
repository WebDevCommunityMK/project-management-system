<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\Response;

class RegisterController extends Controller
{
    public function index(){

        return Inertia::render('Auth/Register');

    }

    public function store(RegisterRequest $request){
        
        // validate name, email and password through RegisterRequest
        $validated = $request->validated();

        $user = User::create($validated);

        if($user){
            Auth::login($user);
        }

        return redirect()->intended('/dashboard');
    }
    
}
