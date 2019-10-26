<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Gallery;
use App\Models\Fields;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\GalleryRequest;
use App\Http\Requests\GalleryUpdateRequest;

class GalleryController /*extends Main*/
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $images = Gallery::all();
      return view('admin.gallery.index',[
          'active' => 'Gallery',
          'images' => $images,
      ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('admin.gallery.form',[
          'active' => 'Gallery',
          'action' => 'Create',
      ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(GalleryRequest $request)
  {
    $gallery = new Gallery;
    $gallery->title = $request->title;
    $gallery->field_id = $request->field_id;
    $gallery->description = $request->description;
    if ($request->hasFile('image')) {
      $gallery->image = $request->file('image')->store('public');
    }
    if($gallery->save()){
      return redirect()->route('cp.gallery.index')->with('created','messages.Gallery Image Added Successfully');
    }
    return back()->withErrors('messages.Gallery Image Didn\'t  Added Successfully Please Call The System Admin');
  }
  /**
   * Show the form for editing a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function edit($gallery)
  {
      $image = Gallery::find($gallery);
      return view('admin.gallery.form',[
          'active' => 'Gallery',
          'action' => 'Edit',
          'image' => $image,
      ]);
  }
  /**
   * Update a resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function update(GalleryUpdateRequest $request, $gallery)
  {
    $gallery = new Gallery;
    $gallery->title = $request->title;
    $gallery->field_id = $request->field_id;
    $gallery->description = $request->description;
    if ($request->hasFile('image')) {
      $gallery->image = $request->file('image')->store('public');
    }
    if($gallery->save()){
      return redirect()->route('cp.gallery.index')->with('updated','messages.Slide Updated Successfully');
    }
    return back()->withErrors('messages.Slide Didn\'t  Updated Successfully Please Call The System Admin');
  }
  /**
   * Destroy a resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function Destroy(Request $request, $gallery)
  {
    if(Gallery::destroy($gallery)){
      return redirect()->route('cp.gallery.index')->with('deleted','messages.Slide Deleted Successfully');
    }
    return back()->withErrors('messages.Slide Didn\'t  Deleted Successfully Please Call The System Admin');
  }
  /**
   * Show The Index For Guests.
   *
   * @return \Illuminate\Http\Response
   */
  public function guestIndex()
  {
    $fields = Fields::main();
    $gallery = Gallery::inRandomOrder()->get();
    return view('guest.gallery',[
      'active' => 'Gallery',
      'fields' => $fields,
      'gallery' => $gallery,
    ]);
  }
}
