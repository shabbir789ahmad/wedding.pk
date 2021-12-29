<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
class SliderController extends Controller
{
    function slider()
    {
        $slider=Slider::latest()->take('2')->get();
       
        return view('home_page',compact('slider'));
    }
    function slide(Request $req)
    {
        $sld=new Slider;
        $sld->Heading1=$req->Heading1;
        $sld->Heading2=$req->Heading2;
        if ($req->hasfile('image')) {
          $file=$req->file('image');
          $ext=$file->getClientOriginalExtension();
          $name=$file->getClientOriginalName();
          $filename=$name;
          $file->move('uploads/img/',$filename);
          $sld->image=$filename;
        }
        $sld->save();
    }
}
