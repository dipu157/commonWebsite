<?php

namespace App\Http\Controllers\BackControl;

use Illuminate\Http\Request;
use App\Http\Traits\CommonTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Seting;
use DataTables;

class ConfigureController extends Controller
{
    public function index(){

        $setings = Seting::all();

    	return view('Back.configuration.configuration-index',['setings' => $setings]);
    }

    public function saveConfiguration(Request $request){

    	$logoImage = $request->file('logo_image');
        $imageName = $logoImage->getClientOriginalName();
        $directory = './logo-images/';
        $logoimageURL = $directory.$imageName;
        $logoImage->move($directory,$imageName);

        $navImage = $request->file('nav_image');
        $nimageName = $navImage->getClientOriginalName();
        $directory = './nav-images/';
        $navimageURL = $directory.$nimageName;
        $navImage->move($directory,$nimageName);

        //return $imageURL;
        

         $seting = new Seting();

        $seting->title = $request->title;
        $seting->logo_image = $logoimageURL;
        $seting->nav_image = $navimageURL;
        $seting->user_id = Auth::id();

        $seting->save();

        return redirect('/configuration/configuration-index')->with('msg','Configuration Add Successfully');

    }

    public function updateConfiguration(Request $request){

        $logoImage = $request->file('logo_image');
        $imageName = $logoImage->getClientOriginalName();
        $directory = './logo-images/';
        $logoimageURL = $directory.$imageName;
        $logoImage->move($directory,$imageName);

        $navImage = $request->file('nav_image');
        $nimageName = $navImage->getClientOriginalName();
        $directory = './nav-images/';
        $navimageURL = $directory.$nimageName;
        $navImage->move($directory,$nimageName);

        //return $imageURL;
        

        $seting = Seting::find($request->id);

        //code for remove old file
        if($seting->logo_image != ''  && $seting->logo_image != null){
            $logo_image_old = $seting->logo_image;
            unlink($logo_image_old);
        }

        if($seting->nav_image != ''  && $seting->nav_image != null){
            $nav_image_old = $seting->nav_image;
            unlink($nav_image_old);
        }

        $seting->title = $request->title;
        $seting->logo_image = $logoimageURL;
        $seting->nav_image = $navimageURL;
        $seting->user_id = Auth::id();

        $seting->save();

        return redirect('/configuration/configuration-index')->with('msg','Configuration Updated Successfully');
    }

    public function deleteConfiguration($id){

        $seting = Seting::find($id);
        $seting->delete();

        return redirect()->back()->with('msg','Configuration Deleted Successfully!');
    }
}
