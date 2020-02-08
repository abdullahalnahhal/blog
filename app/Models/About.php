<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use \DB;


class About extends Model
{

    use SoftDeletes;

    public $table = 'about';
    public $timestamps = true;

    protected $fillable = [
    	'content',
      'title',
      'type',
    ];
}
