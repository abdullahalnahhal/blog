<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use \DB;


class Fields extends Model
{

    use SoftDeletes;

    public $table = 'fields';
    public $timestamps = true;

    protected $fillable = [
    	'content',
      'title',
      'type',
    ];

    public static function main($limit = null)
    {
      if($limit !== null){
        return self::whereNull('parent')->limit($limit)->get();
      }else{
        return self::whereNull('parent')->get();
      }
    }

    public function sub_fields()
    {
      return $this->hasMany('App\Models\Fields', 'parent', 'id');
    }

    public function parent_field()
    {
      return $this->hasOne('App\Models\Fields', 'id', 'parent');
    }

    public function gallery()
    {
      return $this->hasOne('App\Models\Gallery', 'id', 'field_id');
    }

    public function all_fields()
    {
      $all = [];
      $sub_fields = $this->sub_fields;
      foreach($sub_fields as $sub_field)
      {
          $all[] = $sub_field;
          if($sub_field->sub_fields->count()){
            $new_subfields = $sub_field->all_fields();
            $all = array_merge($all, $new_subfields);
          }
      }
      return $all;
    }

    public function all_parents()
    {
      $all = [];
      $parent_field = $this->parent_field;
      if($parent_field){
        $all[] = $parent_field;
      }
      if(isset($parent_field->parent)){
        $new_parent = $parent_field->all_parents();
        $all = array_merge($all, $new_parent);
      }
      return $all;
    }
}
