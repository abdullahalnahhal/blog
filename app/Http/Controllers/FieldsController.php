<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Fields;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\MainControllers\AdminsController as Main;
// use App\Http\Requests\AdminsRequest;

class FieldsController /*extends Main*/
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = Fields::all();
        return view('admin.fields.index',[
            'active' => 'Fields',
            'fields' => $fields,
        ]);
    }
    public function create()
    {
      return view('admin.fields.form',[
        'active' => 'Fields',
        'action' => 'Create',
      ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $field = new Fields;
      $field->title = $request->title;
      $field->icon = $request->icon;
      $field->parent = $request->field_id??null;
      $field->content = $request->content;
      if($field->save()){
        return redirect()->route('cp.fields.index')->with('created','messages.Field Added Successfully');
      }
      return back()->withErrors('messages.Field Didn\'t  Added Successfully Please Call The System Admin');
    }
    /**
     * Show the form for editing a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($field)
    {
        $field = Fields::find($field);
        return view('admin.fields.form',[
            'active' => 'Fields',
            'action' => 'Edit',
            'field' => $field,
        ]);
    }
    /**
     * Update a resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $field)
    {
      $field = Fields::find($field);
      $field->title = $request->title;
      $field->icon = $request->icon;
      $field->parent = $request->field_id??null;
      $field->content = $request->content;
      if($field->save()){
        return redirect()->route('cp.fields.index')->with('updated','messages.Slide Updated Successfully');
      }
      return back()->withErrors('messages.Field Didn\'t  Updated Successfully Please Call The System Admin');
    }
    /**
     * Destroy a resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Destroy(Request $request, $field)
    {
      if(Fields::destroy($field)){
        return redirect()->route('cp.fields.index')->with('deleted','messages.Fields Deleted Successfully');
      }
      return back()->withErrors('messages.Field Didn\'t  Deleted Successfully Please Call The System Admin');
    }
    /**
     * Show The Index For Guests.
     *
     * @return \Illuminate\Http\Response
     */
    public function guestIndex()
    {
      $fields = Fields::all();
      return view('guest.fields',[
        'active' => 'Fields',
        'fields' => $fields,
      ]);
    }
    public function guestShow($id)
    {
      $field = Fields::find($id);
      $val =  collect($field->all_parents())->map(function ($value) {
        return $value->title;
      });
      return view('guest.field',[
        'active' => 'Fields',
        'field' => $field,
      ]);
    }
}
