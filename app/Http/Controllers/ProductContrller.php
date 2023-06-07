<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductContrller extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());

        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        // $product->image = $request->input('image');
        // $product->save();

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/product/', $filename);
            $product->image = $filename;
        }
        $product->save();

        return redirect()->back()->with('status', 'Product Added Successfully');
    }

    public function show()
    {
        $products = Product::all();
        return view('products.display', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');


        if ($request->hasfile('image')) {
            $destination = 'uploads/product/' . $product->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/product/', $filename);
            $product->image = $filename;
        }
        $product->update();

        return redirect()->back()->with('status', 'Product Updated Successfully');
    }

    public function total()
    {
        $products = Product::all();
        return view('products.gallary', compact('products'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $destination = 'uploads/product/' . $product->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $product->delete();

        return redirect()->back()->with('status', 'Product Deleted Successfully');
    }
}
