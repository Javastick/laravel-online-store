<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = "Admin Page - Admin - Online Store";
        $viewData['admin'] = Auth::user();
        return view('admin.home.index')->with("viewData", $viewData);
    }
}
