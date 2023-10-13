<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Team;
use Inertia\Inertia;
use Inertia\Response;
use App\Enums\RoleName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Team\NewTeamRequest;

class NewTeamController extends Controller
{

    public function index(): Response
    {
        return Inertia::render('Auth/NewTeam');
    }

    public function create(NewTeamRequest $request): RedirectResponse
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

        // we find the team_leader role
        $role = Role::where('name', RoleName::TEAM_LEADER->value)->first();

        // then we attach the newly registered user id and the role team leader
        // to the pivot table [team_id, user_id, role_id]
        $team->users()->attach(Auth::user(), ['role_id' => $role->id]);

        return redirect()->route('dashboard');
    }
}
