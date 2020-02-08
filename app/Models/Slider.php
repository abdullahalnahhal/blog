<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use \DB;


class Slider extends Model
{

    use SoftDeletes;

    public $table = 'slider';
    public $timestamps = true;

    protected $fillable = [
    	'content',
      'slide',
      'link',
      'link_text',
      'title',
    ];
}
