<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    protected $guarded = array('id');
    protected $name = array('name');
    protected $gender = array('gender');
    protected $hobby = array('hobby');
    protected $introduction = array('introduction');
    
    public function histories()
    {
      return $this->hasMany('App\History');

    }
}


