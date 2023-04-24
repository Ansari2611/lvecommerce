<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    
    {
        if(Auth::id()){
            return redirect('redirect');
        }else{

            $data=Product::paginate(3);
            return view('user.home',compact('data'));
        }
       
           }

    public function search(Request $request)
    {
        $search=$request->search;

        if($search==''){
            $data=Product::paginate(3);
            return view('user.home',compact('data'));
        }

        $data=Product::where('title','like','%'.$search.'%')->get();
        return view('user.home',compact('data'));
    }     
    
    public function addcart(Request $request,$id)
    {
        if(Auth::id())
        {
            $user=auth()->user();
            $product=Product::find($id);
            $cart=new Cart();

            $cart->name=$user->name;
            $cart->phone=$user->email;
            
            $cart->product_title=$product->title;
            $cart->price=$product->price;
            $cart->quantity=$request->quantity;
            $cart->save();


            return redirect()->back();
        }else{
            return redirect('login');
        }
        
    }

    public function showcart(){
        {
            $user=auth()->user();

            $cart=Cart::where('phone',$user->email)->get();

            $count=Cart::where('phone',$user->email)->count();
            return view('user.showcart',compact('count','cart'));

        }
    }

    public function deletecart($id)
    {
        $user=auth()->user();
        $cart=Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    public function confirmorder(Request $request)
    {
        $user=auth()->user();
        $name=$user->name;
        $email=$user->email;
        

        foreach($request->productname as $key=>$productname)
        {
            $order=new Order();

            $order->product_name=$request->productname[$key];
            $order->quantity=$request->quantity[$key];
            $order->price=$request->price[$key];
            $order->name=$name;
            $order->email=$email;

            $order->status='Not Delivered';

            $order->save();
        }

        DB::table('carts')->where('phone',$email)->delete();
        return redirect()->back()->with('message','Ordered Successfully');

    }
}
