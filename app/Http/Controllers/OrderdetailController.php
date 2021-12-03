<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Productdetail;
use App\Models\Orderdetail;
use App\Models\User;
use App\Models\Cart;
use DB;
class OrderdetailController extends Controller
{
    public function formpage(){
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $data = DB::table('products')
            ->join('carts', 'products.id', '=', 'carts.product_id')
            ->select('carts.*', 'products.price')
            ->where('carts.user_id', '=', Auth::user()->id)
            ->get();
        $productids = Cart::where('user_id', Auth::user()->id)->get('product_id');
        $products = Product::whereIn('id', $productids)->get();
        $order = Orderdetail::where('user_id', Auth::user()->id)->get()->first();
        // dd($data);
        return view('checkout', compact('data','products','order'));
    }

    public function fillform(Request $request){
        $user = User::where('id',Auth::user()->id)->get()->first();
        // dd($user->name);

        if($request->get('mydata')==0){
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'postalcode' => 'required',
            ]);
            Orderdetail::where('user_id', Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'postalcode' => $request->postalcode,
            ]);
        }
        else{
            Orderdetail::where('user_id', Auth::user()->id)->update([
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                'address' => $user->address,
                'postalcode' => $user->postalcode,
            ]);
        }
        return redirect()->route('payment');
    }

    public function paymentpage(){
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $data = DB::table('products')
            ->join('carts', 'products.id', '=', 'carts.product_id')
            ->select('carts.*', 'products.price')
            ->where('carts.user_id', '=', Auth::user()->id)
            ->get();
        $productids = Cart::where('user_id', Auth::user()->id)->get('product_id');
        $products = Product::whereIn('id', $productids)->get();
        $order = Orderdetail::where('user_id', Auth::user()->id)->get()->first();
        // dd($data);
        return view('payment', compact('data','products','order'));
    }
}
