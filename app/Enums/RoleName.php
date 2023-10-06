<?php

namespace App\Enums;

enum RoleName: string
{
    case SUPER_ADMIN    = 'super_admin';
    case TEAM_LEADER    = 'team_leader';
    case PROJECT_OWNER  = 'project_owner';
    case MEMBER         = 'member';


    public function label(): string
    {   
        return match($this) {
            self::SUPER_ADMIN   => 'Super Admin',
            self::TEAM_LEADER   => 'Team Leader',
            self::PROJECT_OWNER => 'Project Owner',
            self::MEMBER        => 'Member',
        };
    }
}


