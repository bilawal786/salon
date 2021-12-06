<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'DESC')->get();
        return view('admin.product.index', compact('products'));
    }
    public function create(){
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }
    public function store(Request $request){
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->subcategory_id = $request->subcategory_id;
        $product->price = $request->price;
        $product->oldprice = $request->oldprice;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->material = $request->material;

        if($request->size){
            foreach($request->size as $size)
            {
                $data[] = $size;
                $product->size = json_encode($data);
            }
        }
        if($request->quantity){
            foreach($request->quantity as $quantity)
            {
                $data1[] = $quantity;
                $product->quantity = json_encode($data1);
            }
        }
        if($request->color){
            foreach($request->color as $color)
            {
                $data2[] = $color;
                $product->color = json_encode($data2);
            }
        }

        if ($request->hasfile('photo')) {
            $image1 = $request->file('photo');
            $name1 = time() . 'photo1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'product/';
            $image1->move($destinationPath, $name1);
            $product->photo = 'product/' . $name1;
        }

        if($request->hasfile('gallery')){
            foreach($request->file('gallery') as $image)
            {
                $name = time().'gallery'.'.'.$image->getClientOriginalName();
                $destinationPath ='gallery/';
                $image->move($destinationPath, $name);
                $data9[] = $name;
                $product->gallery = json_encode($data9);
            }
        }
        if($request->hasfile('colorimage')){
            foreach($request->file('colorimage') as $image4)
            {
                $name4 = time().'colorimage'.'.'.$image4->getClientOriginalName();
                $destinationPath ='colorimage/';
                $image4->move($destinationPath, $name4);
                $data10[] = $name4;
                $product->colorimage = json_encode($data10);
            }
        }

        $product->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->price = $request->price;
        $product->oldprice = $request->oldprice;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->material = $request->material;

        if($request->size){
            foreach($request->size as $size)
            {
                $data[] = $size;
                $product->size = json_encode($data);
            }
        }
        if($request->quantity){
            foreach($request->quantity as $quantity)
            {
                $data1[] = $quantity;
                $product->quantity = json_encode($data1);
            }
        }
        if($request->color){
            foreach($request->color as $color)
            {
                $data2[] = $color;
                $product->color = json_encode($data2);
            }
        }

        if ($request->hasfile('photo')) {
            $image1 = $request->file('photo');
            $name = time() . 'photo1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'product/';
            $image1->move($destinationPath, $name);
            $product->photo = 'product/' . $name;
        }


        if($request->hasfile('gallery')){
            foreach($request->file('gallery') as $image)
            {
                $name = time().'gallery'.'.'.$image->getClientOriginalName();
                $destinationPath ='gallery/';
                $image->move($destinationPath, $name);
                $data9[] = $name;
                $product->gallery = json_encode($data9);
            }
        }
        if($request->hasfile('colorimage')){
            foreach($request->file('colorimage') as $image4)
            {
                $name4 = time().'colorimage'.'.'.$image4->getClientOriginalName();
                $destinationPath ='colorimage/';
                $image4->move($destinationPath, $name4);
                $data10[] = $name4;
                $product->colorimage = json_encode($data10);
            }
        }
        $product->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->route('products.index')->with($notification);
    }
    public function edit($id){
        $categories = Category::all();
        $product = Product::find($id);
        return view('admin.product.edit', compact('product', 'categories'));
    }
    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        $notification = array(
            'messege' => 'Supprimé avec succès',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
