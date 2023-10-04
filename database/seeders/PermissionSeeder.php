<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'create_board'],
            ['name' => 'edit_board'],
            ['name' => 'view_board'],
            ['name' => 'archive_board'],
            ['name' => 'delete_board'],
            ['name' => 'create_issue'],
            ['name' => 'edit_issue'],
            ['name' => 'view_issue'],
            ['name' => 'delete_issue'],
            ['name' => 'assign_issue'],
            ['name' => 'create_project'],
            ['name' => 'edit_project'],
            ['name' => 'view_project'],
            ['name' => 'delete_project'],
            ['name' => 'view_reposrt'],
            ['name' => 'generate_reports'],
        ];

        Permission::insert($permissions);
    }
}
