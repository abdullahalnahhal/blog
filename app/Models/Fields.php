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
}
