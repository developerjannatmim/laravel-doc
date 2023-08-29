<?php

namespace App\Enums;

enum ProductStatusEnum:string {
    case Pending = 'pending';
    case Active = 'Active';
    case Inactive = 'inactive';
    case Rejected = 'rejected';
} 