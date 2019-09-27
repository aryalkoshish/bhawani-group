<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable = ['image','altimage','title','description','seotitle','seokeywords','seodescription'];
}
