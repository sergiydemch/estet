<?php

namespace App\Modules\Acl\Models;

use Laratrust\LaratrustPermission;

class Permission extends LaratrustPermission
{
  /**
   * Fillable fields
   *
   * @var array
   */
  protected $fillable = [
      'name',
      'display_name',
      'description'
  ];
  //

}
