<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Enums\PermissionName;
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
                'name'        => PermissionName::CREATE_BOARD->value,
                'label'       => PermissionName::CREATE_BOARD->label(),
                'description' => 'The user can create a board.'
            ],
            [
                'name'         => PermissionName::EDIT_BOARD->value,
                'label'        => PermissionName::EDIT_BOARD->label(),
                'description'  => 'The user can edit a board.'
            ],
            [
                'name'         => PermissionName::VIEW_BOARD->value,
                'label'        => PermissionName::VIEW_BOARD->label(),
                'description'  => 'The user can view a board.'
            ],
            [
                'name'         => PermissionName::ARCHIVE_BOARD->value,
                'label'        => PermissionName::ARCHIVE_BOARD->label(),
                'description'  => 'The user can archive a board.'
            ],
            [
                'name'         => PermissionName::DELETE_BOARD->value,
                'label'        => PermissionName::DELETE_BOARD->label(),
                'description'  => 'The user can delete board.'
            ],
            [
                'name'         => PermissionName::CREATE_ISSUE->value,
                'label'        => PermissionName::CREATE_ISSUE->label(),
                'description'  => 'The user can create issue.'
            ],
            [
                'name'         => PermissionName::EDIT_ISSUE->value,
                'label'        => PermissionName::EDIT_ISSUE->label(),
                'description'  => 'The user can edit issue.'
            ],
            [
                'name'         => PermissionName::VIEW_ISSUE->value,
                'label'        => PermissionName::VIEW_ISSUE->label(),
                'description'  => 'The user can view issue.'
            ],
            [
                'name'         => PermissionName::DELETE_ISSUE->value,
                'label'        => PermissionName::DELETE_ISSUE->label(),
                'description'  => 'The user can delete issue.'
            ],
            [
                'name'         => PermissionName::ASSIGN_ISSUE->value,
                'label'        => PermissionName::ASSIGN_ISSUE->label(),
                'description'  => 'The user can assign issue.'
            ],
            [
                'name'         => PermissionName::CREATE_PROJECT->value,
                'label'        => PermissionName::CREATE_PROJECT->label(),
                'description'  => 'The user can create project.'
            ],
            [
                'name'         => PermissionName::EDIT_PROJECT->value,
                'label'        => PermissionName::EDIT_PROJECT->label(),
                'description'  => 'The user can edit a project.'
            ],
            [
                'name'         => PermissionName::VIEW_PROJECT->value,
                'label'        => PermissionName::VIEW_PROJECT->label(),
                'description'  => 'The user can view project.'
            ],
            [
                'name'         => PermissionName::DELETE_PROJECT->value,
                'label'        => PermissionName::DELETE_PROJECT->label(),
                'description'  => 'The user can delete a project.'
            ],
            [
                'name'         => PermissionName::VIEW_REPORTS->value,
                'label'        => PermissionName::VIEW_REPORTS->label(),
                'description'  => 'The user can view reports.'
            ],
            [
                'name'         => PermissionName::GENERATE_REPORTS->value,
                'label'        => PermissionName::GENERATE_REPORTS->label(),
                'description'  => 'The user can generate reports.'
            ],
        ];

        Permission::insert($permissions);
    }
}
