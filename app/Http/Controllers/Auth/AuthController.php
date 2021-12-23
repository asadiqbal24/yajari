<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class AuthController extends Controller
{
    public function userLogin(Request $request){




        $this->validate($request,[
        'email'=>'required',
        'password'=>'required',             
    ]);



         $email = $request->input('email');
               $password = $request->input('password');

                $user = User::where('email',$request->input('email'))->first();
              //  dd($user);


                 if($user && $user->login_status == '0'){
          
         alert()->error('You Are Not Allowed To Login && Please Contact To Admin');  

         return redirect()->back();
       }



       
        if(!Auth::attempt($request->only(['email','password']))){
          
          return redirect()->back()->with('danger','Username & Password combination doesn\'t not match');
        
        } 



    dd(Auth::user()->hasAccess(['user']));
        if(Auth::user()->hasAccess(['admin'])){
          alert()->success('Welcome To Admin Dashboard');
          return redirect()->route('admin.home')->with('success','WELCOME'.Auth::user()->username.'...');
        
        }

         elseif(Auth::user()->hasAccess(['user'])){

                   alert()->success('Welcome To user Home');
                 // dd('owner');
                  return redirect()->route('examiner-home')->with('success','WELCOME '.Auth::user()->username.'...'); 
                
                }

                else{
         
          return redirect()->back()->with('danger','Something went wrong please try again...');
        } 








        



        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');

    }
}
