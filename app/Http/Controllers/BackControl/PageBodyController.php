<?php

namespace App\Http\Controllers\BackControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PageBody;

class PageBodyController extends Controller
{
    public function index(){

    	return view('Back.PageBody.pageBody-index');
    }
}
