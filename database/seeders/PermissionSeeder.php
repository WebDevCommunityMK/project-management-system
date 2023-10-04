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
            [
                'name'  => 'create_board',
                'label' => 'Create Board'    
            ],
            [
                'name'  => 'edit_board',
                'label' => 'Edit Board'
            ],
            [
                'name'  => 'view_board',
                'label' => 'View Board'
            ],
            [
                'name'  => 'archive_board',
                'label' => 'Archive Board'
            ],
            [
                'name'  => 'delete_board',
                'label' => 'Delete Board'
            ],
            [
                'name'  => 'create_issue',
                'label' => 'Create Issue'
            ],
            [
                'name'  => 'edit_issue',
                'label' => 'Edit Issue'
            ],
            [
                'name'  => 'view_issue',
                'label' => 'View Issue'
            ],
            [
                'name'  => 'delete_issue',
                'label' => 'Delete Issue'
            ],
            [
                'name'  => 'assign_issue',
                'label' => 'Assign Issue'
            ],
            [
                'name'  => 'create_project',
                'label' => 'Create Project'
            ],
            [
                'name'  => 'edit_project',
                'label' => 'Edit Project'
            ],
            [
                'name'  => 'view_project',
                'label' => 'View Project'
            ],
            [
                'name'  => 'delete_project',
                'label' => 'Delete Project'
            ],
            [
                'name'  => 'view_reports',
                'label' => 'View Reports'
            ],
            [
                'name'  => 'generate_reports',
                'label' => 'Generate Reports'
            ],
        ];

        Permission::insert($permissions);
    }
}
