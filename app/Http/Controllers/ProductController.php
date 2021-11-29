<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ProductController extends Controller
{


    public function addpage()
    {
        return view('admin_add');
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
            $request->file->store('product', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $product = new Product([
                "name" => $request->get('name'),
                "file" => $request->file->hashName(),
                "price" => $request->get('price'),
                "category" => $request->get('category'),

            ]);
            $product->save(); // Finally, save the record.
        }

        return view('admin_add');

    }
}