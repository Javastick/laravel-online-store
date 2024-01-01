<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "Daftar Produk";
        $viewData["products"] = Product::all();

        return view('product.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);

        $viewData = [];
        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["subtitle"] = $product->getName()." - Product Information";
        $viewData["product"] = $product;

        return view('product.show')->with("viewData", $viewData);
    }
}
