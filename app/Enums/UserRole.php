<?php

namespace App\Enums;

enum UserRole: int
{
    case Admin = 1;
    case Internal = 2;
    case User = 3;
    
}
