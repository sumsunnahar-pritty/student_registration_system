<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected  $fillable = ['name', 'roll', 'father_name', 'mother_name', 'email', 'password', 'image'];

}
