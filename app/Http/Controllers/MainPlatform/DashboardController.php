<?php

namespace App\Http\Controllers\MainPlatform;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Main-Platform/Dashboard');
    }
}
