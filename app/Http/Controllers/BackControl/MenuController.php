<?php

namespace App\Http\Controllers\BackControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use DataTables;


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

        $menus = Menu::all();

    	return view('Back.menu.manage-menu-index',['menus' => $menus]);
    }

    public function unpublishedMenu($id){

        $menu = Menu::find($id);
        $menu->status = 0;
        $menu->save();

        return redirect()->back()->with('message','Menu Info Unublished Successfully!');
    }


    public function publishedMenu($id){

        $menu = Menu::find($id);
        $menu->status = 1;
        $menu->save();

        return redirect()->back()->with('message','Menu Info Published Successfully!');
    }

    public function editMenuIndex($id){

        $menu = Menu::find($id);

        return view('Back.menu.edit-menu',['menu' => $menu]);
    }

    public function updateMenu(Request $request){

        $menu = Menu::find($request->id);

        $menu->menu_name = $request->menu_name;
        $menu->menu_description = $request->menu_description;
        $menu->menu_type = $request->menu_type;
        $menu->status = $request->status;

        $menu->save();

        return redirect('/menu/manage-menu')->with('message','Menu Updated Successfully!');
    }

    public function deleteMenu($id){

        $menu = Menu::find($id);
        $menu->delete();

        return redirect()->back()->with('message','Menu Deleted Successfully!');
    }
}
