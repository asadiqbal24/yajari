<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use App\Models\User;


class EmailVerficationController extends Controller
{
    public function email_verification($token)
    {

        $user = User::where('email_verified_at',$token)->first();
        if(empty($user)){

            $type = 'warning';
            $message = 'Token Invalid';

             return redirect()->back();
        }else{
            if($user->login_status==1){

            $type = 'warning';
                    $message = 'Account Already Activated';

             return redirect()->back()->with('warning','Account Already Activated');
            }else{

             $type = 'success';
             $message = 'Congrats! Email Verified Successfully, Please Login';
             $user->login_status = 1;
             $user->save();
             alert()->success("Email Verified Successfully, Please Login");
             return redirect()->back()->with('verify','Email Verified Successfully, Please Login');
            }


        }
    }

    public function email_opt_verfication(Request $request)
    {
        //dd($request);
        $email_opt=md5(date('Y-m-d').microtime());
        $new= new User();
        $new->email_opt='#'.substr($email_opt, 0,7);
        $new->email=$request->email;
        $new->save();
        return redirect()->back();

    }
}
