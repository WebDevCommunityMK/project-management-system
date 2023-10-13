<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Http\Requests\Team\NewTeamRequest;

class NewTeamController extends Controller
{

    public function index(): Response
    {
        return Inertia::render('Auth/NewTeam');
    }

    public function create(NewTeamRequest $request)
    {
        $validated = $request->validated();

        // check if there is a logo/image attached to the form
        // (logo is not required, it can be set afterwards on the team profile page)
        if($request->logo){
            
            $path = public_path('logos/');
            
            // if directory logos does not exists, we create one
            !is_dir($path) && mkdir($path, 0777, true);

            //set the name of the image/logo file
            $logoName = time() . '.' . $request->logo->extension();

            //move the image/logo to public folder->logos/
            $request->logo->move($path, $logoName);

        }

        $team = new Team();
        $team->name = $request->name;
        
        if($request->logo && $logoName){
            $team->logo = $logoName;
        }

        $team->save();

        return redirect()->route('dashboard');
    }
}
