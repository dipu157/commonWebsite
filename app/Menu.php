<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
