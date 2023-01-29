<?php

namespace App\Http\Controllers\Mygym\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GymDashboardController extends Controller
{
    public function myGymDashboard(){
        dd("gym dashboard");
    }

    public function logout() {
        Auth::guard('mygym')->logout();
        return redirect()->route('mygym.login')->with("msg", "Logged out Successfully");
    }
    
}
