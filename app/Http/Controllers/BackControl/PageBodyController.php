<?php

namespace App\Http\Controllers\BackControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\PageBody;
use App\Models\Menu;

class PageBodyController extends Controller
{
    public function index(){

    	$pagebodies = PageBody::all();

    	$menus = Menu::all();

    	return view('Back.PageBody.pageBody-index',['pagebodies' => $pagebodies , 'menus' => $menus]);
    }

    public function savePageBody(Request $request){

    	$pagebodyImage = $request->file('related_image');
        $imageName = $pagebodyImage->getClientOriginalName();
        $directory = './pagebody-images/';
        $pagebodyImageURL = $directory.$imageName;
        $pagebodyImage->move($directory,$imageName);

        //return $imageURL;
        

         $pagebody = new PageBody();

        $pagebody->menu_id = $request->menu_id;
        $pagebody->headline = $request->headline;
        $pagebody->detail_description = $request->detail_description;
        $pagebody->related_image = $pagebodyImageURL;
        $pagebody->status = $request->status;
        $pagebody->user_id = Auth::id();

        $pagebody->save();

        return redirect('/pagebody/pagebody-index')->with('msg','Pagebody Add Successfully');

    }

    public function unpublishedPageBody($id){

        $pagebody = PageBody::find($id);
        $pagebody->status = 0;
        $pagebody->save();

        return redirect()->back()->with('message','Pagebody Info Unublished Successfully!');
    }


    public function publishedPageBody($id){

        $pagebody = PageBody::find($id);
        $pagebody->status = 1;
        $pagebody->save();

        return redirect()->back()->with('message','Pagebody Info Published Successfully!');
    }

    public function updatePageBody(Request $request){

        return $request->all();
    }

    public function deletePageBody($id){

        $pagebody = PageBody::find($id);
        $pagebody->delete();

        return redirect()->back()->with('message','Pagebody Deleted Successfully!');
    }
}
