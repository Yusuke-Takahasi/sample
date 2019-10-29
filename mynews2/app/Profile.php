<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    protected $name = array('name');
    protected $gender = array('gender');
    protected $hobby = array('hobby');
    protected $introduction = array('introduction');
}
