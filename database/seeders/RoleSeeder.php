<?php

namespace Database\Seeders;

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
                'name'  => 'super_admin',
                'label' => 'Super Admin',
            ],
            [
                'name'  => 'project_owner',
                'label' => 'Project Owner',
            ],
            [
                'name'  => 'member',
                'label' => 'Member',
            ],
        ];

        Role::insert($roles);
    }
}
