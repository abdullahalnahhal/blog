<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Fields;
use App\Models\Gallery;
use App\Models\Videos;
use App\Models\Contacts;
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
      $fields = Fields::main();
      $gallery = Gallery::inRandomOrder()->limit(12)->get();
      $videos = Videos::inRandomOrder()->limit(4)->get();
      $contacts = Contacts::orderBy('id', 'DESC')->first();
      $contacts = json_decode($contacts->info, true);
      return view('guest.index',[
          'active' => 'Home',
          'slides' => $slides,
          'fields' => $fields,
          'gallery' => $gallery,
          'videos' => $videos,
          'contacts' => $contacts,
      ]);
  }

}
