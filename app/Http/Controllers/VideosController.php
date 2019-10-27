<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Videos;
use App\Models\Fields;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\VideosRequest;

class VideosController /*extends Main*/
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $videos = Videos::all();
      return view('admin.videos.index',[
          'active' => 'Videos',
          'videos' => $videos,
      ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('admin.videos.form',[
          'active' => 'Videos',
          'action' => 'Create',
      ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(VideosRequest $request)
  {
    $videos = new Videos;
    $videos->title = $request->title;
    $videos->link = $request->link;
    $videos->field_id = $request->field_id;
    $videos->description = $request->description;
    if($videos->save()){
      return redirect()->route('cp.videos.index')->with('created','messages.Video Added Successfully');
    }
    return back()->withErrors('messages.Video Didn\'t  Added Successfully Please Call The System Admin');
  }
  /**
   * Show the form for editing a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function edit($video)
  {
      $video = Videos::find($video);
      return view('admin.videos.form',[
          'active' => 'Videos',
          'action' => 'Edit',
          'video' => $video,
      ]);
  }
  /**
   * Update a resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function update(VideosRequest $request, $videos)
  {
    $videos = new Videos;
    $videos->title = $request->title;
    $videos->link = $request->link;
    $videos->field_id = $request->field_id;
    $videos->description = $request->description;
    if($videos->save()){
      return redirect()->route('cp.videos.index')->with('updated','messages.Video Updated Successfully');
    }
    return back()->withErrors('messages.Video Didn\'t  Updated Successfully Please Call The System Admin');
  }
  /**
   * Destroy a resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function Destroy(Request $request, $videos)
  {
    if(Videos::destroy($videos)){
      return redirect()->route('cp.videos.index')->with('deleted','messages.Video Deleted Successfully');
    }
    return back()->withErrors('messages.Video Didn\'t  Deleted Successfully Please Call The System Admin');
  }
  /**
   * Show The Index For Guests.
   *
   * @return \Illuminate\Http\Response
   */
  public function guestIndex()
  {
    $fields = Fields::main();
    $videos = Videos::inRandomOrder()->get();
    return view('guest.videos',[
      'active' => 'Gallery',
      'fields' => $fields,
      'videos' => $videos,
    ]);
  }
}
