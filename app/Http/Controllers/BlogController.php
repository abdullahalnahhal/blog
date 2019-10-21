<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\RoleUsers;
use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\MainControllers\AdminsController as Main;
use App\Http\Requests\AdminsRequest;

class BlogController /*extends Main*/
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

}
