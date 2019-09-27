<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    protected $fillable = ['image','altimage','name','description','seotitle','keywords','seodescription','status'];

// protected $guarded = [‘*’];
 }
