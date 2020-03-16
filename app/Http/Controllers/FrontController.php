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

    	$seting = Seting::first();
    	$sliders = Slider::all();
    	$pagebodies = PageBody::all();
    	$menus = Menu::where('status',1)->get();

    	return view('Front.layout.home',[
    		'seting' => $seting,
    		'sliders' => $sliders,
    		'menus' => $menus,
    		'pagebodies' => $pagebodies
    	]);
    }
}
