<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class AuthController extends Controller
{
    public function userLogin(Request $request){

        $user = User::where('email',$request->email)->first();

            if(empty($user)){
                $user = User::where('phone_number',$request->email)->first();                
            }

             if(empty($user)){
                return redirect()->back()->with('eMessage','Phone Number or Email doesnot exists.');
             }

        if (!Auth::attempt($request->only('email', 'password'))) {

               return redirect()->back()->with('eMessage','Phone Number or Email doesnot exists.');
        }else{
            return redirect()->route('userDashboard');
        }
        
    }
}
