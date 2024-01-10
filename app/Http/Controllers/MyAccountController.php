<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData["title"] = "Akun Saya - Online Store";
        $viewData["subtitle"] = "Akun Saya";
        $viewData["account"] = Auth::user();
        $viewData["orders"] = Order::with(['items.product'])->where('user_id', Auth::user()->getId())->get();
        return view('myaccount.orders')->with("viewData", $viewData);
    }

    public function edit(){
        $viewData = [];
        $viewData["title"] = "Edit Profil - Online Store";
        $viewData["subtitle"] = "Edit Profil";
        $viewData["account"] = Auth::user();
        return view('myaccount.edit')->with('viewData', $viewData);
    }
    public function update(Request $request){
        User::validate($request);

        $user = Auth::user();
        $user->setName($request->input('name'));
        $user->setPhone($request->input('phone'));
        $user->setAddress($request->input('address'));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $saveImage = $image->store('public/img');
            $fullPath = explode('/', $saveImage);

            $imageName = last($fullPath);

            $user->setImage($imageName);
        }

        $user->save();
        return redirect()->route('myaccount.index');
    }
    
}
