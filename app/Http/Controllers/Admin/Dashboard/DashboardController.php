<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('adminAuth')->except('logout');
    // }

    public function dashboard() 
    {
        return view('Admin.Dashboard.dashboard');
    }

    public function logout() 
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with("msg", "Logout Successfully");

    }
}
