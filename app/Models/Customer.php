<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Customer extends Model
{
    protected $table= 'customers';

    protected $guarded = ['id', 'created_at','updated_at'];

    
}
