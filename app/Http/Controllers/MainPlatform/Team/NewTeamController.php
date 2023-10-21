<?php

namespace App\Http\Controllers\MainPlatform\Team;

use App\Enums\RoleName;
use App\Http\Controllers\Controller;
use App\Http\Requests\Team\NewTeamRequest;
use App\Mail\MainPlatform\WelcomeEmail;
use App\Models\Role;
use App\Models\Team;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class NewTeamController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Auth/NewTeam');
    }

    public function store(NewTeamRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $team = new Team();

        // if logo field is not null
        if ($request->logo !== null) {
            $logo = Storage::putFile('/logos', $request->logo);
            $team->logo = $logo;
        }

        $team->name = $request->name;

        $team->save();

        // we find the team_leader role
        $role = Role::where('name', RoleName::TEAM_LEADER->value)->first();

        // then we attach the newly registered user id and the role team leader
        // to the pivot table [team_id, user_id, role_id]
        $team->users()->attach(Auth::user(), ['role_id' => $role->id]);

        // creating $data array for the welcome email
        $data = [
            'name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
            'team' => $team->name,
        ];

        // send the welcome email
        Mail::to(Auth::user()->email)->send(new WelcomeEmail($data));

        return redirect()->route('dashboard');
    }
}
