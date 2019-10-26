<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use \DB;


class Gallery extends Model
{

    use SoftDeletes;

    public $table = 'gallery';
    public $timestamps = true;

    protected $fillable = [
    	'image',
      'field_id',
      'description',
      'title',
    ];

    public function field()
    {
      return $this->hasOne('App\Models\Fields', 'id', 'field_id');
    }
    public function fields()
    {
      // return $this->field->
    }

}
