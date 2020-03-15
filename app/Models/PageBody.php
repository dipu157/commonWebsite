<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class PageBody extends Model
{
    protected $table= 'page_bodies';

    protected $guarded = ['id', 'created_at','updated_at'];

    public function menu(){

    	return $this->belongsTo('App\Models\Menu');
    }
}
