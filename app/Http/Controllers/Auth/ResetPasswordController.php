<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\ResetPasswordRequest;


class ResetPasswordController extends Controller
{
    public function index() :Response
    {
              
        return Inertia::render('Auth/ResetPassword');        
    }

    public function store(ResetPasswordRequest $request)
    {
        
        $request->validated();

        User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

        return to_route('login');       
        
    }
}
