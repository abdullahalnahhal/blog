<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Models\RoleUsers;
use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\MainControllers\AdminsController as Main;
use App\Http\Requests\AdminsRequest;

class UsersController /*extends Main*/
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::all();
        return view('admin.users.users.index',[
            'active' => 'Admins',
            'users' => $admins,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.users.form',[
            'active' => 'Admins',
            'action' => 'Create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminsRequest $request)
    {
      $user = new User;
      $user->name = $request->name;
      $user->email = $request->username;
      $user->is_admin = '1';
      $user->password = Hash::make($request->password);
      if ($user->save()) {
          $user_role = new RoleUsers;
          $user_role->user_id = $user->id;
          $user_role->roles_id = $request->role_id;
          if ($user_role->save()) {
              return redirect()->route('cp.admins.index')->with('created','settings.User Has Been Created ...!');
          }
      }
      return back()->withErrors('common.Sorry But there Was an issue in saving Data please try again');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Admins::find($id);
        $articles = Articles::where('admin_id', '=', $id)->paginate(9);
        return view('visitors.author',[
            'active' => '',
            'articles' => $articles,
            'author' => $admin,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admins::find($id);
        return view('control-panel.admins.form',[
            'active' => 'Admins',
            'admin' => $admin,
            'action' => 'Edit',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminsRequest $request, $id)
    {
        $admin = Admins::find($id);
        $is_saved = $this->save($admin, $request);
        if ($is_saved) {
            return redirect()->route('admins.index');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login()
    {
        return view('admin.login',[
            'active' => '',
        ]);
    }
    public function loginSubmit(Request $request)
    {

      $credintials = [
  			'email'=>$request->username,
  			'password'=>$request->password,
  		];
  		// attempt to log the user in
  		$auth = Auth::guard('web')->attempt($credintials);
  		// if successful then redirect to their intended location
  		if ($auth) {
    		// $this->makeSession($request);
    		return redirect()->intended(route("cp.index"));
		  }
    	// if not success return to the login page with the form data
    	return redirect()->back()->withErrors('Email Or Password May Be Wrong')->withInput($request->only('email', 'remember'));
    }
    public function logout()
  	{
  		Auth::guard('web')->logout();
  		return redirect()->route('cp.login');
  	}
}
