<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\GeneralSettings;
use App\Http\Controllers\Controller;
use App\Product;
use App\SaleProduct;
use Illuminate\Http\Request;
use ImageOptimizer;
class GeneralSettingsController extends Controller
{
    public function settings(){
        $gs = GeneralSettings::find(1);
        return view('admin.generalsettings.settings', compact('gs'));
    }
    public function settingsStore(Request $request){
        $gs = GeneralSettings::find(1);
        $gs->sitename = $request->sitename;
        $gs->address = $request->address;
        $gs->email = $request->email;
        $gs->phone1 = $request->phone1;
        $gs->phone2 = $request->phone2;
        $gs->footer = $request->footer;
        $gs->facebook = $request->facebook;
        $gs->instagram = $request->instagram;
        $gs->twitter = $request->twitter;
        $gs->web = $request->web;

        if ($request->hasfile('logo')) {
            $image1 = $request->file('logo');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $gs->logo = 'logo/' . $name;
        }
        if ($request->hasfile('mainimage')) {
            $image2 = $request->file('mainimage');
            $name2 = time() . 'mainimage' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'mainimage/';
            $image2->move($destinationPath, $name2);
//            ImageOptimizer::optimize('mainimage/' . $name2);
            $gs->mainimage = 'mainimage/' . $name2;
        }
        $gs->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function slider(){
        $content = Content::find(1);
        return view('admin.generalsettings.slider', compact('content'));
    }
    public function sliderStore(Request $request){
        $content = Content::find(1);

        if ($request->hasfile('slider1')) {
            $image1 = $request->file('slider1');
            $name1 = time() . 'slider' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'slider/';
            $image1->move($destinationPath, $name1);
            $content->slider1 = 'slider/' . $name1;
        }
        if ($request->hasfile('slider2')) {
            $image2 = $request->file('slider2');
            $name2 = time() . 'slider' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'slider/';
            $image2->move($destinationPath, $name2);
            $content->slider2 = 'slider/' . $name2;
        }
        if ($request->hasfile('slider3')) {
            $image3 = $request->file('slider3');
            $name3 = time() . 'slider' . '.' . $image3->getClientOriginalExtension();
            $destinationPath = 'slider/';
            $image3->move($destinationPath, $name3);
            $content->slider3 = 'slider/' . $name3;
        }
        if ($request->hasfile('slider4')) {
            $image4 = $request->file('slider4');
            $name4 = time() . 'slider' . '.' . $image4->getClientOriginalExtension();
            $destinationPath = 'slider/';
            $image4->move($destinationPath, $name4);
            $content->slider4 = 'slider/' . $name4;
        }
        if ($request->hasfile('slider5')) {
            $image5 = $request->file('slider5');
            $name5 = time() . 'slider' . '.' . $image5->getClientOriginalExtension();
            $destinationPath = 'slider/';
            $image5->move($destinationPath, $name5);
            $content->slider5 = 'slider/' . $name5;
        }
        $content->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function testimonial(){
        $content = Content::find(1);
        return view('admin.generalsettings.testimonial', compact('content'));
    }
    public function testimonialStore(Request $request){
        $content = Content::find(1);
        $content->review1 = $request->review1;
        $content->review2 = $request->review2;
        $content->review3 = $request->review3;

        $content->rgive1 = $request->rgive1;
        $content->rgive2 = $request->rgive2;
        $content->rgive3 = $request->rgive3;
        $content->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function offers(){
        $content = Content::find(1);
        return view('admin.generalsettings.offers', compact('content'));
    }
    public function offerStore(Request $request){
        $content = Content::find(1);
        if ($request->hasfile('o1image')) {
            $image1 = $request->file('o1image');
            $name1 = time() . 'offer' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'offer/';
            $image1->move($destinationPath, $name1);
            $content->o1image = 'offer/' . $name1;
        }
        if ($request->hasfile('o2image')) {
            $image2 = $request->file('o2image');
            $name2 = time() . 'offer' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'offer/';
            $image2->move($destinationPath, $name2);
            $content->o2image = 'offer/' . $name2;
        }
        $content->o1title = $request->o1title;
        $content->o2title = $request->o2title;

        $content->o1duration = $request->o1duration;
        $content->o2duration = $request->o2duration;

        $content->o1d1 = $request->o1d1;
        $content->o1d2 = $request->o1d2;
        $content->o1d3 = $request->o1d3;
        $content->o1d4 = $request->o1d4;

        $content->o1p1 = $request->o1p1;
        $content->o1p2 = $request->o1p2;
        $content->o1p3 = $request->o1p3;
        $content->o1p4 = $request->o1p4;

        $content->o2d1 = $request->o2d1;
        $content->o2d2 = $request->o2d2;
        $content->o2d3 = $request->o2d3;
        $content->o2d4 = $request->o2d4;

        $content->o2p1 = $request->o2p1;
        $content->o2p2 = $request->o2p2;
        $content->o2p3 = $request->o2p3;
        $content->o2p4 = $request->o2p4;

        $content->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function saleproduct(){
        $products = Product::all();
        return view('admin.saleproduct.index', compact('products'));
    }
    public function saleproductstore(Request $request){
        $saleproduct = SaleProduct::find(1);
        $saleproduct->product_id = $request->product_id;
        $saleproduct->date = $request->date;
        $saleproduct->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
