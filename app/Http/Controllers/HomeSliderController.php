<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\MainControllers\AdminsController as Main;
use App\Http\Requests\SliderRequest;
use App\Http\Requests\SliderUpdateRequest;

class HomeSliderController /*extends Main*/
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slider::all();
        return view('admin.slider.index',[
            'active' => 'Home Slider',
            'slides' => $slides,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.form',[
            'active' => 'Home Slider',
            'action' => 'Create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
      $slider = new Slider;
      $slider->title = $request->title;
      $slider->link = $request->link;
      $slider->link_text = $request->link_text;
      $slider->content = $request->content;
      if ($request->hasFile('slide')) {
            $slider->slide = $request->file('slide')->store('public');
      }
      if($slider->save()){
        return redirect()->route('cp.slider.index')->with('created','messages.Slide Added Successfully');
      }
      return back()->withErrors('messages.Slide Didn\'t  Added Successfully Please Call The System Admin');
    }
    /**
     * Show the form for editing a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($slider)
    {
        $slide = Slider::find($slider);
        return view('admin.slider.form',[
            'active' => 'Home Slider',
            'action' => 'Edit',
            'slide' => $slide,
        ]);
    }
    /**
     * Update a resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(SliderUpdateRequest $request, $slider)
    {
      $slider = Slider::find($slider);
      $slider->title = $request->title;
      $slider->link = $request->link;
      $slider->link_text = $request->link_text;
      $slider->content = $request->content;
      if ($request->hasFile('slide')) {
            $slider->slide = $request->file('slide')->store('public');
      }
      if($slider->save()){
        return redirect()->route('cp.slider.index')->with('updated','messages.Slide Updated Successfully');
      }
      return back()->withErrors('messages.Slide Didn\'t  Updated Successfully Please Call The System Admin');
    }
    /**
     * Update a resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Destroy(Request $request, $slider)
    {
      if(Slider::destroy($slider)){
        return redirect()->route('cp.slider.index')->with('deleted','messages.Slide Deleted Successfully');
      }
      return back()->withErrors('messages.Slide Didn\'t  Deleted Successfully Please Call The System Admin');
    }
}
