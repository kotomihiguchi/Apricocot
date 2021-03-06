<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'body' => 'required',
        'image' => 'required',
    );
}
