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
}
