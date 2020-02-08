<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsersPermissionsRequest;

// use App\Http\MainControllers\DishesController  as Main;

class UsersPermissionsController  /*extends Main*/
{
	  public function index ()
    {
        $roles = Roles::all();
        return view('admin.users.permissions.index', [
            'roles' => $roles,
        ]);
    }
    public function create()
    {
      return view('admin.users.permissions.form',[
        'action'=>'Create',
      ]);
    }
    public function store (UsersPermissionsRequest $request)
		{
			$role = new Roles;
			$role->name = $request->name;
			$role->slug = $request->slug;
	    $role->permissions = json_encode($request->permissions);
		  if ($role->save()) {
		        return redirect()->route('cp.admins-permissions.index')->with('created','settings.User Roles Has Been Created ...!');
		  }
		    return back()->withErrors('common.Sorry But there Was an issue in saving Data please try again');
		}
    public function edit($role)
    {
        $role = Roles::find($role);
        return view('admin.users.permissions.form',[
            'action'=>'Edit',
            'role'=>$role
        ]);
    }
    public function update (Request $request, $permission)
		{
			$role = Roles::find($permission);
			$role->name = $request->name;
			$role->slug = $request->slug;
	    $role->permissions = json_encode($request->permissions);
		  if ($role->save()) {
		      return redirect()->route('cp.permissions.index')->with('updated','settings.User Roles Has Been Updated ...!');
		  }
		  return back()->withErrors('common.Sorry But there Was an issue in saving Data please try again');
		}
}

?>
