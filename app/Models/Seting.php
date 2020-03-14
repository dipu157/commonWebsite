<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seting extends Model
{
    protected $table= 'setings';

    protected $guarded = ['id', 'created_at','updated_at'];

    protected $fillable = [   

    	'title',
    	'logo_image',
    	'nav_image',
    	'user_id',
    ];

    public function user(){

    	return $this->belongsTo('App\User');
    }
}
