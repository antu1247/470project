<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
            return view ('userdash');
        }
        elseif(Auth::user()->hasRole('admin')){
            return view ('dashboard');
        }
    }

    public function myprofile(){
        return view ('myprofile');
    }

    public function booking(){
        if(Auth::user()->hasRole('user')){
            return redirect()->route('tickets.userindex');
        }
        elseif(Auth::user()->hasRole('admin')){
            return redirect()->route('tickets.index');
        }
    }
    
    public function routes(){
        return redirect()->route('tickets.guestindex');
    }

}
