<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userDashboard()
    {

    if(Auth::user()->hasRole('Admin')){
        // dd('admin');
       return view('admin.dashboard');
    }

      elseif(Auth::user()->hasRole('User')){
       return redirect()->route('home');       
    }


    }
}
