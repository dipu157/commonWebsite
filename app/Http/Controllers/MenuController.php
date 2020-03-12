<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function index(){

    	return view('Back.menu.menu-index');
    }

    public function addMenu(Request $request){

    	Menu::create($request->all());

    	return redirect()->back()->with('msg','Menu Add Successfully');
    }

    public function manageMenu(){

    	return view('Back.menu.manage-menu-index');
    }
}
