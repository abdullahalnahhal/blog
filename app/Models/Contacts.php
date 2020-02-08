<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use \DB;


class Contacts extends Model
{

    use SoftDeletes;

    public $table = 'contacts';
    public $timestamps = true;

    protected $fillable = [
    	'info',
    ];
}
