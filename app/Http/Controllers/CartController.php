<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Productdetail;
use App\Models\User;
use App\Models\Cart;


class CartController extends Controller
{
    public function addcart(Request $request)
    {
        // dd($request);
        $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'size' => 'required',
            'amount' => 'required',

        ]);
        
        $cart = new Cart([
            "user_id" => $request->get('user_id'),
            "product_id" => $request->get('product_id'),
            "size" => $request->get('size'),    
            "amount" => $request->get('amount'),    
        ]);
        $cart->save(); // Finally, save the record.
        
        return redirect('caribarang');
    }
}
