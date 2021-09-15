<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function about(){
        return view('front.about');
    }
    public function services(){
        return view('front.services');
    }
    public function gallery(){
        return view('front.gallery');
    }
    public function blogs(){
        return view('front.blogs');
    }
    public function contact(){
        return view('front.contact');
    }
    public function modalBooking(){
        return view('modal.booking');
    }
    public function modalAddress(){
        return view('modal.address');
    }
    public function modalOpening(){
        return view('modal.opening');
    }
}
