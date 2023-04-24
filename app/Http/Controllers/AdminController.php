<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;


class AdminController extends Controller
{
    //
    public function index()
    {
       $usertype=Auth::user()->usertype;
       if($usertype==1){
        return view('admin.home');
       }
       else{
        $data=Product::paginate(3);

        $user=auth()->user();
        $count=Cart::where('phone',$user->email)->count();


        return view('user.home',compact('data','count'));
       }
    }


    public function product(){
        if(Auth::id())
        {
            if(Auth::user()->usertype==1){
                return view('admin.product');


            }else{
                return redirect()->back();
            }
        }
        
    }

    public function showproduct(){
        if(Auth::id())
        {
            $data=Product::all();
            if(Auth::user()->usertype==1){
                return view('admin.showproduct',compact('data'));


            }else{
                return redirect()->back();
            }
        }



       

       
    }

    public function deleteproduct($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function editproduct($id)
    {
        if(Auth::id())
        {
            $data=Product::find($id);
            if(Auth::user()->usertype==1){
                return view('admin.updateproduct',compact('data'));


            }else{
                return redirect()->back();
            }
        }
        


        
        
    }

    public function updateproduct(Request $request,$id)
    {
        $data=Product::find($id);

        
        

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('productimages', $filename);
            $data->image = $filename;
        }
        
        $data->save();
        return redirect('/showproduct')->with('message','Product Updated Successfully');

    }
    public function showorder()
    {
        $order=Order::all();
        return view('admin.showorder',compact('order'));
    }

    public function updatestatus($id)
    {
        $order=Order::find($id);
        $order->status='Delivered';
        $order->save();
        return redirect()->back();
    }
}
