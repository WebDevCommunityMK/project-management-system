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

}
