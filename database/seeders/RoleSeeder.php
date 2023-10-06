<?php

namespace Database\Seeders;

use App\Enums\RoleName;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name'        => RoleName::SUPER_ADMIN->value,
                'label'       => RoleName::SUPER_ADMIN->label(),
                'description' => 'Super admin has full control ovr the platform.',
            ],
            [
                'name'        => RoleName::TEAM_LEADER->value,
                'label'       => RoleName::TEAM_LEADER->label(),
                'description' => 'Team leader has control over his/hers team and projects specified to his/hers team.',
            ],
            [
                'name'        => RoleName::PROJECT_OWNER->value,
                'label'       => RoleName::PROJECT_OWNER->label(),
                'description' => 'Project owner is a member who own/\'s the project (Project Manager).',
            ],
            [
                'name'        => RoleName::MEMBER->value,
                'label'       => RoleName::MEMBER->label(),
                'description' => 'A member of a platform.',
            ],
        ];

        Role::insert($roles);
    }
}
