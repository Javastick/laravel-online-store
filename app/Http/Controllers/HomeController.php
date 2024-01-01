<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";

        return view("home.index")->with("viewData", $viewData);
    }
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About - Online Store";
        $viewData["subtitle"] = "Tentang Aplikasi Ini";
        $viewData["description"] = "Ini adalah halaman About ...";
        $viewData["author"] = "Dibuat oleh: Ziamul Umam";

        return view('home.about')->with("viewData", $viewData);
    }
}
