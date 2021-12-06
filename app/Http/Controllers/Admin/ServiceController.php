<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
   public function index(){
       $services = Service::all();
       return view('admin.service.index', compact('services'));
   }
   public function create(){
       return view('admin.service.create');
   }
   public function store(Request $request){
       $service = new Service();
       $service->title = $request->title;
       $service->price = $request->price;
       $service->duration = $request->duration;
       if ($request->hasfile('image')) {
           $image1 = $request->file('image');
           $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
           $destinationPath = 'image/';
           $image1->move($destinationPath, $name);
           $service->image = 'image/' . $name;
       }
       $service->save();
       $notification = array(
           'messege' => 'Sauvegarde réussie!',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
   }
   public function update(Request $request, $id){
       $service = Service::find($id);
       $service->title = $request->title;
       $service->price = $request->price;
       $service->duration = $request->duration;
       if ($request->hasfile('image')) {
           $image1 = $request->file('image');
           $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
           $destinationPath = 'image/';
           $image1->move($destinationPath, $name);
           $service->image = 'image/' . $name;
       }
       $service->update();
       $notification = array(
           'messege' => 'Sauvegarde réussie!',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
   }
   public function delete($id){
       $service = Service::find($id);
       $service->delete();
       $notification = array(
           'messege' => 'Supprimé avec succès',
           'alert-type' => 'error'
       );
       return redirect()->back()->with($notification);
   }
   public function edit($id){
       $service = Service::find($id);
       return view('admin.service.edit', compact('service'));
   }
}
