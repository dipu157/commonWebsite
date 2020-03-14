<?php

namespace App\Http\Traits;


use Illuminate\Support\Facades\Auth;

trait CommonTrait
{

    public function getUserId() {

        $user_id = Auth::id();
        return $user_id;

    }

}