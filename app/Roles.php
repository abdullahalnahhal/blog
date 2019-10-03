<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $table = 'roles';
    public $timestamps = true;

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
        return $permissions[$permission]??false;
    }
}
