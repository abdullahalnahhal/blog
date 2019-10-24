<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\MainControllers\AdminsController as Main;
use App\Http\Requests\AboutRequest;

class AboutController /*extends Main*/
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $about = About::all();
         return view('admin.about.index',[
             'active' => 'About Us',
             'about' => $about,
         ]);
     }
     public function main(Request $request)
     {
          $main = About::where('type', '=', 1)->first();
          if(!$main || !$main->count()){
            $main = new About;
            $main->type = 1;
          }
          $main->content = $request->main;
          if($main->save()){
            return redirect()->route('cp.about.index')->with('created','messages.Main Content Of About Page Has Been Created Successfully');
          }
          return back()->withErrors('messages.Main Content Of About Page Didn\'t  Added Successfully Please Call The System Admin');
     }
    public function create()
    {
      return view('admin.about.form',[
        'active' => 'About Us',
        'action' => 'Create',
      ]);
    }
    public function store(AboutRequest $request)
    {
      $about = new About;
      $about->type = 2;
      $about->title = $request->title;
      $about->content = $request->content;
      if($about->save()){
        return redirect()->route('cp.about.index')->with('created','messages.About Section Added Successfully');
      }
      return back()->withErrors('messages.About Section Didn\'t Added Successfully Please Call The System Admin');
    }
    public function edit($about)
    {
      $section = About::find($about);
      return view('admin.about.form',[
        'active' => 'About Us',
        'action' => 'Edit',
        'section' => $section,
      ]);
    }
    public function update(AboutRequest $request, $about)
    {
      $about = About::find($about);
      $about->title = $request->title;
      $about->content = $request->content;
      if($about->save()){
        return redirect()->route('cp.about.index')->with('updated','messages.About Section Updated Successfully');
      }
      return back()->withErrors('messages.About Section Didn\'t Updated Successfully Please Call The System Admin');
    }
    public function Destroy(Request $request, $about)
    {
      if(About::destroy($about)){
        return redirect()->route('cp.about.index')->with('deleted','messages.About Section Deleted Successfully');
      }
      return back()->withErrors('messages.Slide Didn\'t Deleted Successfully Please Call The System Admin');
    }
}
