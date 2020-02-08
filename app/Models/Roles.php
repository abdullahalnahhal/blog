<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $table = 'roles';
    public $timestamps = true;
    protected $fillable = [
    	'name',
      'slug',
      'permissions',
    ];
    public function users()
		{
				return $this->belongsToMany(App\User::class, 'role_users');
		}

    public function hasAccess(array $permissions)
    {
        foreach($permissions as $permission){

            if($this->hasPermission($permission)){
                return true;
            }
            return false;
        }
    }

    public function hasPermission(string $permission)
    {

        $permissions = json_decode($this->permissions, true);
        return (in_array($permission, $permissions))?true:false;
    }
}
