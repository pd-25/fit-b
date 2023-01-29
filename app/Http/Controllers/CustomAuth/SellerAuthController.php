<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// Seller = gym
class SellerAuthController extends Controller
{
    public function index() {
        return view('CustomAuth.Seller.login');
    }

    public function login( Request $request ) {
        $request->validate([
            "email" => "required|email",
            "password" => "required|string"
        ]);
        if(auth()->guard('mygym')->attempt( ['email' => $request->email, 'password' => $request->password] )){
            return redirect()->intended('gym-administrator/mygym-dashboard')
            ->with("msg", "You havde successfully logged in to your gym dashboard");
        }
        return back()->with("msg", "This cradentials doesn't match our records");
        
    }

    
    public function showRegisterForm(){
        return view("CustomAuth.Seller.register");
    }
}
