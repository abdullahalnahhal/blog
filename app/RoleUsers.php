<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use \DB;


class RoleUsers extends Model
{

    use SoftDeletes;

    public $table = 'role_users';
    public $timestamps = true;

    protected $fillable = [
    	'user_id',
      'role_id',
    ];
}
