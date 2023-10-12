<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;



class ResetPasswordController extends Controller
{
    public function create() :Response
    {
              
        return Inertia::render('Auth/ForgotPassword',[
            'status' => session('status'),
        ]);        
    }

    public function store(Request $request): RedirectResponse
    {
        
        $request->validate(['email' => 'required|email']);
 
        $status = Password::sendResetLink(
            $request->only('email')
        );
 
        return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);       
        
    }


}
