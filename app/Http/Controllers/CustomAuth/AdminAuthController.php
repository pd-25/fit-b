<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use App\Models\admin;
use Illuminate\Http\Request;
use Auth;

class AdminAuthController extends Controller
{
    public function index() {
        return view('CustomAuth.Admin.login');
    }

    public function login( Request $request) {
      
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        $data = $request->all();
        if (auth()->guard('admin')->attempt( ['email' => $data['email'], 'password' => $data['password'] ] )) {
            return redirect()->route('admin.dashboard');
        }else {
            return back()->with('msg', 'Credentials Doesn\'t match');
        }
    }
}
