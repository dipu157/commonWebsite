<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Slider;
use App\Models\PageBody;
use App\Models\Menu;
use App\Models\Seting;

class FrontController extends Controller
{
    public function index(){

    	$setings = Seting::all();
    	$sliders = Slider::all();
    	$pagebodies = PageBody::all();
    	$menus = Menu::all();

    	return view('Front.layout.home',[
    		'setings' => $setings,
    		'sliders' => $sliders,
    		'menus' => $menus,
    		'pagebodies' => $pagebodies
    	]);
    }
}
