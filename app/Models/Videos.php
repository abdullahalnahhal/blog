<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use \DB;


class Videos extends Model
{

    use SoftDeletes;

    public $table = 'videos';
    public $timestamps = true;

    protected $fillable = [
    	'link',
      'field_id',
      'description',
      'title',
    ];

    public function field()
    {
      return $this->hasOne('App\Models\Fields', 'id', 'field_id');
    }
}
