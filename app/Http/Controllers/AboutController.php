<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showcart(){
        {
            $user=auth()->user();

            $cart=Cart::where('phone',$user->email)->get();

            $count=Cart::where('phone',$user->email)->count();
            return view('user.about',compact('count','cart'));

        }
    }
}
