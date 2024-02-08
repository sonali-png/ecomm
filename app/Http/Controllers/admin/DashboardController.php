<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $admin = Auth::guard('admin')->user();
        //https://www.youtube.com/watch?v=vPqud-uWW5o
        return view('admin.dashboard', compact('admin'));
    }
}
