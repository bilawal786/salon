<?php

namespace App\Http\Controllers\Front;

use App\About;
use App\Category;
use App\Contact;
use App\Content;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\SaleProduct;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class FrontendController extends Controller
{
    public function index(){
        $content = Content::find(1);
        $saleproduct = SaleProduct::find(1);
        return view('front.index', compact('content', 'saleproduct'));
    }
    public function admin(){
        return view('admin.login');
    }
    public function about(){
        $about = About::find(1);
        return view('front.about', compact('about'));
    }
    public function services(){
        $services = Service::all();
        return view('front.services', compact('services'));
    }
    public function gallery(){
        $gallery = Gallery::all();
        return view('front.gallery', compact('gallery'));
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
    public function products(){
        $category = Category::all();
        $products = Product::all();
        return view('front.products', compact('products', 'category'));
    }
    public function category($id){
        $products = Product::where('category_id', $id)->get();
        $category = Category::all();
        return view('front.products', compact('products', 'category'));
    }
    public function product($id){
        $product = Product::find($id);
        return view('front.product', compact('product'));
    }
    public function addtocart(Request $request){
        $product = Product::where('id', $request->id)->first();
        \Cart::add($product->id, $product->title, $product->price, $request->quantity);
        return redirect()->route('cartitems');
    }
    public function cartitems(){
        $cartitems = \Cart::getContent();
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        return view('front.cart', compact('cartitems', 'total', 'cartTotalQuantity'));
    }
    public function checkout(){
        $user = Auth::user();
        $cartitems = \Cart::getContent();
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        if(isset($total)){
            \Stripe\Stripe::setApiKey (env('STRIPE_SECRET_KEY'));
            $payment_intent = \Stripe\PaymentIntent::create([
                'amount' => ($total) *100,
                'currency' => 'EUR'
            ]);
        }
        $intent = $payment_intent->client_secret;
        return view('front.checkout', compact('cartitems', 'total', 'cartTotalQuantity', 'user', 'intent'));
    }
    public function removcart($id){
        \Cart::remove($id);
        return redirect()->back();
    }
    public function checkoutSubmit(Request $request){
        $cartitems = \Cart::getContent();

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->fname = $request->fname;
        $order->lname = $request->lname;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->notes = $request->notes;
        $order->total = $request->total;
        $order->postal = $request->postal;
        $order->products = $cartitems;
        $order->paymentstatus = '1';

        $order->order_number = "ON-".rand(100000000, 900000000);
        $order->save();

        foreach(json_decode($order->products) as $item){
            $product = Product::find($item->id);
            if ($product){
                $product->quantity = $product->quantity - $item->quantity;
                $product->update();
            }
        }

        \Cart::clear();
        return view('front.paymentsuccess', compact('order'));
    }
    public function dashbooard(){
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('user.dashboard', compact('orders'));
    }
    public function orderView($id){
        $order = Order::where('id', $id)->first();
        return view('user.orderView', compact('order'));
    }
    public function contactSubmit(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->title = $request->title;
        $contact->message = $request->message;
        $contact->save();
        Session::flash('message', 'Ce créneau horaire est réservé à cette date. Vérifiez votre tableau de bord pour la disponibilité des machines à sous!');
        return redirect()->back();
    }
}
