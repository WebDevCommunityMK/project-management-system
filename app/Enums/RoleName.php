<?php

namespace App\Enums;


enum RoleName: int {

    case SUPER_ADMIN    = 1;
    case PROJECT_OWNER  = 2;
    case MEMBER         = 3;

}