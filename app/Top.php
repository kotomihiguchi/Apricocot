<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Top extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
      'image' => 'required',
    );
}
