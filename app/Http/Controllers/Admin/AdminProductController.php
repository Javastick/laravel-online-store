<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = "Admin Page - Produk - Online Store";
        $viewData['products'] = Product::all();
        return view('admin.product.index')->with("viewData", $viewData);
    }
    public function store(Request $request)
    {
        Product::validate($request);
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $saveImage = $image->store('public/img');
            $fullPath = explode('/', $saveImage);
            // dd($saveImage);
            $imageName = last($fullPath);
        }

        Product::create([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "price" => $request->input('price'),
            "image" => $imageName,
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        return back();
    }
    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }
    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Produk - Online Store";
        $viewData["product"] = Product::findOrFail($id);
        return view('admin.product.edit')->with("viewData", $viewData);
    }
    public function update(Request $request, $id)
    {
        Product::validate($request);

        $product = Product::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setDescription($request->input('description'));
        $product->setPrice($request->input('price'));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $saveImage = $image->store('public/img');
            $fullPath = explode('/', $saveImage);
            
            $imageName = last($fullPath);
            
            $product->setImage($imageName);
        }

        $product->save();
        return redirect()->route('admin.product.index');
    }
}
