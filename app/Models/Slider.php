<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Slider extends Model
{
    protected $table= 'sliders';

    protected $guarded = ['id', 'created_at','updated_at'];

    protected $fillable = [     
    ];
}
