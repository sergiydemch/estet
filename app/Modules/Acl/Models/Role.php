<?php

namespace App\Modules\Acl\Models;

use Laratrust\LaratrustRole;

class Role extends LaratrustRole
{
    //
    protected $fillable = [
        'name',
        'display_name',
        'description'
    ];
    //

}
