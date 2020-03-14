<?php

namespace App\Http\Controllers\BackControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PageBody;
use App\Models\Menu;

class PageBodyController extends Controller
{
    public function index(){

    	$pagebodies = PageBody::all();

    	$menus = Menu::all();

    	return view('Back.PageBody.pageBody-index',['pagebodies' => $pagebodies , 'menus' => $menus]);
    }
}
