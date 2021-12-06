<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\MainCategory;
use App\SubCategory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }
    public function store(Request $request){
        $maincategory = new Category();
        $maincategory->name = $request->name;
        if ($request->hasfile('photo')) {
            $image1 = $request->file('photo');
            $name = time() . 'category' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'category/';
            $image1->move($destinationPath, $name);
            $maincategory->photo = 'category/' . $name;
        }
        $maincategory->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        $notification = array(
            'messege' => 'Supreme!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
    public function subcategoryindex(){
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin.subcategory.index', compact('category', 'subcategory'));
    }
    public function subcategorystore(Request $request){
        $subcategory = new SubCategory();
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function subcategorydelete($id){
        $category = SubCategory::find($id);
        $category->delete();
        $notification = array(
            'messege' => 'Supreme!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
    public function fetchsubcategory(Request $request){
        $subcategories = SubCategory::where('category_id', '=', $request->id)->get();
        return response()->json($subcategories);
    }

    public function password_change() {

        return view ('admin.updatepassword');
    }

    public function password_update(Request $request)
    {
        $password=Auth::user()->password;
        $oldpass=$request->oldpass;
        $newpass=$request->password;
        $confirm=$request->password_confirmation;
        if (Hash::check($oldpass,$password)) {
            if ($newpass === $confirm) {
                $user=User::find(Auth::id());
                $user->password=Hash::make($request->password);
                $user->save();
                Auth::logout();
                $notification=array(
                    'messege'=>'Le mot de passe a été changé avec succès ! Connectez-vous maintenant avec votre nouveau mot de passe',
                    'alert-type'=>'success'
                );
                return Redirect()->route('login')->with($notification);
            }else{
                $notification=array(
                    'messege'=>'Le nouveau mot de passe et la confirmation du mot de passe ne correspondent pas!',
                    'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
            }
        }else{
            $notification=array(
                'messege'=>'Lancien mot de passe ne correspond pas!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }

    }

}
