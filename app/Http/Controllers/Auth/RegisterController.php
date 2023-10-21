<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class RegisterController extends Controller
{
    public function index(): Response
    {

        return Inertia::render('Auth/Register');

    }

    public function store(RegisterRequest $request): RedirectResponse
    {

        // validate name, email and password through RegisterRequest
        $validated = $request->validated();

        $user = User::create($validated);

        if ($user) {
            Auth::login($user);
        }

        return redirect()->route('new-team.index');

    }
}
