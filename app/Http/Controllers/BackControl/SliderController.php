<?php

namespace App\Http\Controllers\BackControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use DataTables;

class SliderController extends Controller
{
    public function index(){

    	$sliders = Slider::all();

    	return view('Back.slider.slider-index',['sliders' => $sliders]);
    }

     public function saveSlider(Request $request){

    	$sliderImage = $request->file('slider_image');
        $imageName = $sliderImage->getClientOriginalName();
        $directory = './slider-images/';
        $sliderImageURL = $directory.$imageName;
        $sliderImage->move($directory,$imageName);

        //return $imageURL;
        

         $slider = new Slider();

        $slider->slider_text = $request->slider_text;
        $slider->slider_image = $sliderImageURL;
        $slider->status = $request->status;

        $slider->save();

        return redirect('/slider/slider-index')->with('msg','Slider Add Successfully');

    }

    public function unpublishedSlider($id){

        $slider = Slider::find($id);
        $slider->status = 0;
        $slider->save();

        return redirect()->back()->with('msg','Slider Info Unublished Successfully!');
    }


    public function publishedSlider($id){

        $slider = Slider::find($id);
        $slider->status = 1;
        $slider->save();

        return redirect()->back()->with('msg','Slider Info Published Successfully!');
    }

    public function updateSlider(Request $request){

        $sliderImage = $request->file('slider_image');
        $imageName = $sliderImage->getClientOriginalName();
        $directory = './slider-images/';
        $sliderImageURL = $directory.$imageName;
        $sliderImage->move($directory,$imageName);

        //return $imageURL;
        

        $slider = Slider::find($request->id);

        //code for remove old file
        if($slider->slider_image != ''  && $slider->slider_image != null){
            $slider_image_old = $slider->slider_image;
            unlink($slider_image_old);
        }

        $slider->slider_text = $request->slider_text;
        $slider->slider_image = $sliderImageURL;
        $slider->status = $request->status;;

        $slider->save();

        return redirect('/slider/slider-index')->with('msg','slider Updated Successfully');
    }

    public function deleteSlider($id){

        $slider = Slider::find($id);
        $slider->delete();

        return redirect()->back()->with('msg','Slider Deleted Successfully!');
    }
}
