<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Team\NewTeamRequest;

class NewTeamController extends Controller
{
    public function create(NewTeamRequest $request){
        
        $validated = $request->validated();

        dd($validated);

    }
}
