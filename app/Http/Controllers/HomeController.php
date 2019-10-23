<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\MainControllers\AdminsController as Main;
use App\Http\Requests\AdminsRequest;

class HomeController /*extends Main*/
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function adminIndex()
  {
      $admins = User::all();
      return view('admin.users.users.index',[
          'active' => 'Admins',
          'users' => $admins,
      ]);
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function guestIndex()
  {
      $slides = Slider::all();
      return view('guest.index',[
          'active' => 'Home',
          'slides' => $slides
      ]);
  }

}
