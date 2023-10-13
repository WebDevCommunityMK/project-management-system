<?php

namespace App\Http\Controllers;

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

        if($request->logo){
            
            $path = public_path('logos/');
            // if directory logos does not exists, we create one
            !is_dir($path) && mkdir($path, 0777, true);

            //set the name of the image/logo file
            $logoName = time() . '.' . $request->logo->extension();

            //move the image/logo to public folder->logos/
            $request->logo->move($path, $logoName);

        }

        


        // $image       = new Image();
        // $image->name = $imageName;
        // $image->save();

        // return redirect('/dashboard');
    }
}
