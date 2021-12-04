<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Productdetail;

class ProductController extends Controller
{


    public function addpage()
    {
        $products = \App\Models\Product::paginate(3);
        return view('admin_add', compact('products'));
    }
    public function editpage($id)
    {  
        
        $product = Product::where('id',$id)->first();
        // dd($product);
        return view('admin_edit', compact('product'));
    }
    public function caripage()
    {
        $products = Product::all();
        return view('cari_barang', compact('products'));
    }
    public function detailpage($id)
    {
        // if(Auth::attempt()){
            // $user = Auth::user();
            $product = Product::where('id',$id)->first();
            $details = Productdetail::where('product_id', $id)->get();
            // $details = Productdetail::all();
            // dd($details);
            return view('detail_barang', compact('details', 'product'));
        // }

    }
    public function edititem(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
        ]);
        // dd($request);
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('public/images/');

            // Store the record, using the new file hashname which will be it's new filename identity.
            Product::where('id', $request->id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'category' => $request->category,
                'file' => $request->file->hashName(),

            ]);

        }
        else{
            Product::where('id', $request->id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'category' => $request->category,
            ]);
        }

        return redirect('additem');
        
    }

    public function landingpage()
    {
        $products = Product::all();
        // dd($products);
        return view('landing', compact('products'));
    }

    public function store(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',

        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('public/images/');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $product = new Product([
                "name" => $request->get('name'),
                "file" => $request->file->hashName(),
                "price" => $request->get('price'),
                "category" => $request->get('category'),

            ]);
            $product->save(); // Finally, save the record.
        }

        return redirect('additem');

    }

    public function listproducts(Request $request)
    {
        // dd($request->term);
        if($request->term){
            $products = Product::where(function ($query) use ($request) {
                $query->where('category', 'LIKE', '%' . $request->term . '%' )->orWhere('name', 'LIKE', '%' . $request->term . '%' );
                })->paginate(4);
        }
        else{
            $products = Product::where(function ($query) use ($request) {
                $query->where('category', 'LIKE', '%' . $request->term . '%' )->orWhere('name', 'LIKE', '%' . $request->term . '%' );
                })->paginate(4);
        }
        return view('cari_barang',compact('products'));
    }
}
