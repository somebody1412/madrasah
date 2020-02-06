<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Role const
    const ADMIN =1;
    const STAFF = 2;
    const USER = 3;
    CONST ROLES=[
        self::ADMIN => 'Admin',
        self::STAFF => 'Staff',
        self::USER => 'User'
    ];

    public static function getRoles($role_id) {
        return self::ROLES[$role_id];
    }
}
