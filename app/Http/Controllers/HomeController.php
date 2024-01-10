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
        $viewData["description"] = "Proyek ini bertujuan untuk membangun sebuah aplikasi web Online Store menggunakan Laravel, yang dikembangkan dengan mengikuti arahan yang disajikan dalam buku \"Practical Laravel: Develop Clean MVC Web Applications\" yang ditulis oleh Daniel Correa. Proyek ini dibuat sebagai bahan belajar pribadi saya untuk mendalami framework Laravel.";
        $viewData["author"] = "<h5>Programmer:</h5>Ziamul Umam<br><br><h5>Buku:</h5><i>Practical Laravel \"Develop Clean MVC Web Applications\"</i><br><br><h5>Penulis:</h5><i>Daniel Correa - Paola Vallejo</i><br>";

        return view('home.about')->with("viewData", $viewData);
    }
}
