<?php

namespace App\Enums;

enum PermissionName: string
{
    case CREATE_BOARD = 'create_board';
    case EDIT_BOARD = 'edit_board';
    case VIEW_BOARD = 'view_board';
    case ARCHIVE_BOARD = 'archive_board';
    case DELETE_BOARD = 'delete_board';
    case CREATE_ISSUE = 'create_issue';
    case EDIT_ISSUE = 'edit_issue';
    case VIEW_ISSUE = 'view_issue';
    case DELETE_ISSUE = 'delete_issue';
    case ASSIGN_ISSUE = 'assign_issue';
    case CREATE_PROJECT = 'create_project';
    case EDIT_PROJECT = 'edit_project';
    case VIEW_PROJECT = 'view_project';
    case DELETE_PROJECT = 'delete_project';
    case VIEW_REPORTS = 'view_reports';
    case GENERATE_REPORTS = 'generate_reports';

    public function label(): string
    {
        return match ($this) {
            self::CREATE_BOARD => 'Create Board',
            self::EDIT_BOARD => 'Edit Board',
            self::VIEW_BOARD => 'View Board',
            self::ARCHIVE_BOARD => 'Archive Board',
            self::DELETE_BOARD => 'Delete Board',
            self::CREATE_ISSUE => 'Create Issue',
            self::EDIT_ISSUE => 'Edit Issue',
            self::VIEW_ISSUE => 'View Issue',
            self::DELETE_ISSUE => 'Delete Issue',
            self::ASSIGN_ISSUE => 'Assign Issue',
            self::CREATE_PROJECT => 'Create Project',
            self::EDIT_PROJECT => 'Edit Project',
            self::VIEW_PROJECT => 'View Project',
            self::DELETE_PROJECT => 'Delete Project',
            self::VIEW_REPORTS => 'View Reports',
            self::GENERATE_REPORTS => 'Generate Reports'
        };
    }
}
