<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Menu extends Model
{
    protected $table= 'menus';

    protected $guarded = ['id', 'created_at','updated_at'];

    protected $fillable = [
        'menu_name',
        'menu_description',
        'menu_type',
        'status',        
    ];
}
